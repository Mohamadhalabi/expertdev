<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stripe\StripeClient;
use Stripe\Webhook;

class PaymentController extends Controller
{
    // Fixed-price plans (server-side source of truth — never trust prices from the browser)
    private array $plans = [
        'bug-fixes' => [
            'name'        => 'Bug Fixes',
            'amount'      => 1500,  // $15.00
            'description' => 'Expert Dev — bug diagnosis and code fix for an existing web or mobile application.',
        ],
        'improvements' => [
            'name'        => 'Feature Improvement',
            'amount'      => 3000,  // $30.00
            'description' => 'Expert Dev — feature enhancement, UI/UX update, or performance optimization for web or mobile.',
        ],
        'integration' => [
            'name'        => 'API Integration',
            'amount'      => 4500,  // $45.00
            'description' => 'Expert Dev — third-party API or service integration for a web or mobile application.',
        ],
        'module' => [
            'name'        => 'Custom Module',
            'amount'      => 4800,  // $48.00
            'description' => 'Expert Dev — custom feature module development for a web, mobile, or SaaS product.',
        ],
        'projects' => [
            'name'        => 'Web & Mobile Project',
            'amount'      => 10000,  // $100.00
            'description' => 'Expert Dev — full-stack web and mobile application development milestone.',
        ],
        'saas' => [
            'name'        => 'SaaS Development',
            'amount'      => 20000,  // $200.00
            'description' => 'Expert Dev — custom SaaS platform development and architecture milestone.',
        ],
    ];

    private function stripe(): StripeClient
    {
        return new StripeClient(config('services.stripe.secret'));
    }

    /**
     * Checkout for a fixed plan: /checkout/{plan}
     */
    public function checkout(string $plan)
    {
        abort_unless(isset($this->plans[$plan]), 404);

        $selected = $this->plans[$plan];

        $payment = Payment::create([
            'reference'   => 'EXD-' . strtoupper(Str::random(10)),
            'plan_name'   => $selected['name'],
            'amount'      => $selected['amount'],
            'currency'    => 'usd',
            'status'      => 'pending',
        ]);

        return $this->createSession(
            $payment,
            $selected['name'],
            $selected['amount'],
            $selected['description']
        );
    }

    /**
     * Show the custom payment form.
     */
    public function customForm()
    {
        return view('payment.custom');
    }

    /**
     * Handle custom payment submission.
     */
    public function customCheckout(Request $request)
    {
        $data = $request->validate([
            'customer_name'  => 'required|string|max:120',
            'customer_email' => 'required|email|max:160',
            'description'    => 'required|string|max:500',
            'amount'         => 'required|numeric|min:5|max:100000', // dollars
        ]);

        $amountCents = (int) round($data['amount'] * 100);

        $payment = Payment::create([
            'reference'      => 'EXD-' . strtoupper(Str::random(10)),
            'customer_name'  => $data['customer_name'],
            'customer_email' => $data['customer_email'],
            'plan_name'      => 'Custom Payment',
            'description'    => $data['description'],
            'amount'         => $amountCents,
            'currency'       => 'usd',
            'status'         => 'pending',
        ]);

        return $this->createSession(
            $payment,
            'Custom Payment',
            $amountCents,
            $data['description'],
            $data['customer_email']
        );
    }

    /**
     * Create a Stripe Checkout Session and redirect.
     * Stripe collects card + billing details itself, so guests
     * don't need an account on your site.
     */
    private function createSession(
        Payment $payment,
        string $productName,
        int $amountCents,
        string $description,
        ?string $email = null
    ) {
        $params = [
            'mode' => 'payment',
            'line_items' => [[
                'price_data' => [
                    'currency'     => 'usd',
                    'unit_amount'  => $amountCents,
                    'product_data' => [
                        'name'        => $productName,
                        'description' => Str::limit($description, 200),
                    ],
                ],
                'quantity' => 1,
            ]],
            'billing_address_collection' => 'required',
            'client_reference_id' => $payment->reference,
            'metadata' => [
                'payment_id' => $payment->id,
                'reference'  => $payment->reference,
            ],
            'success_url' => route('payment.success') . '?ref=' . $payment->reference . '&session_id={CHECKOUT_SESSION_ID}',
            'cancel_url'  => route('payment.cancel') . '?ref=' . $payment->reference,
        ];

        // Only pre-fill the email if we have one (custom payments).
        // For fixed plans we omit it, and Stripe collects it on its page.
        if (!empty($email)) {
            $params['customer_email'] = $email;
        }

        $session = $this->stripe()->checkout->sessions->create($params);

        $payment->update(['stripe_session_id' => $session->id]);

        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        $payment = Payment::where('reference', $request->query('ref'))->first();
        return view('payment.success', compact('payment'));
    }

    public function cancel(Request $request)
    {
        $payment = Payment::where('reference', $request->query('ref'))->first();
        return view('payment.cancel', compact('payment'));
    }

    /**
     * Stripe webhook — the ONLY reliable place to mark a payment paid.
     * Don't trust the success_url redirect alone (users can close the tab).
     */
    public function webhook(Request $request)
    {
        $payload   = $request->getContent();
        $signature = $request->header('Stripe-Signature');

        try {
            $event = Webhook::constructEvent(
                $payload,
                $signature,
                config('services.stripe.webhook_secret')
            );
        } catch (\Throwable $e) {
            return response('Invalid signature', 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            $payment = Payment::where('stripe_session_id', $session->id)->first();

            if ($payment && $payment->status !== 'paid') {
                $payment->update([
                    'status'                 => 'paid',
                    'stripe_payment_intent'  => $session->payment_intent,
                    'customer_email'         => $payment->customer_email ?: ($session->customer_details->email ?? ''),
                    'customer_name'          => $payment->customer_name ?: ($session->customer_details->name ?? null),
                ]);

                // TODO: send confirmation email, notify your team, etc.
            }
        }

        return response('ok', 200);
    }

    /**
     * Shows the private admin form where YOU create a payment link.
     */
    public function createLinkForm()
    {
        return view('admin.create-link');
    }

    /**
     * YOU submit the form -> generates a link to send the client.
     */
    public function createPaymentLink(Request $request)
    {
        $data = $request->validate([
            'customer_name'  => 'nullable|string|max:120',
            'customer_email' => 'required|email|max:160',
            'description'    => 'required|string|max:500',
            'amount'         => 'required|numeric|min:5|max:100000',
        ]);

        $payment = Payment::create([
            'reference'      => 'EXD-' . strtoupper(Str::random(10)),
            'customer_name'  => $data['customer_name'] ?? null,
            'customer_email' => $data['customer_email'],
            'plan_name'      => 'Custom Quote',
            'description'    => $data['description'],
            'amount'         => (int) round($data['amount'] * 100),
            'currency'       => 'usd',
            'status'         => 'pending',
        ]);

        $link = route('pay.show', $payment->reference);

        return back()->with('payment_link', $link);
    }

    /**
     * The CLIENT opens the link you sent -> goes to Stripe checkout.
     */
    public function payShow(string $reference)
    {
        $payment = Payment::where('reference', $reference)->firstOrFail();

        if ($payment->status === 'paid') {
            return view('payment.success', compact('payment'));
        }

        return $this->createSession(
            $payment,
            $payment->plan_name,
            $payment->amount,
            $payment->description,
            $payment->customer_email
        );
    }
}