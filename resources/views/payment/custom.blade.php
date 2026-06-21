@extends('layouts.app')

@section('content')
<section class="py-[100px]" style="padding-top: 160px;">
  <div class="main-container">
    <div class="max-w-[650px] mx-auto text-center space-y-5 mb-12">
      <span class="badge badge-cyan">Custom Payment</span>
      <h1 class="text-heading-3 md:text-heading-2 text-secondary dark:text-accent">Make a custom payment</h1>
      <p class="text-secondary/60 dark:text-accent/60">Agreed on a custom scope with our team? Enter the details and amount below to pay securely.</p>
    </div>

    <div class="p-6 lg:p-[42px] bg-white dark:bg-background-8 rounded-[20px] max-w-[650px] mx-auto border border-stroke-1 dark:border-white/10 shadow-lg">
      @if ($errors->any())
        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('payment.custom.process') }}" method="post" class="space-y-6">
        @csrf

        <fieldset class="w-full flex flex-col gap-2">
          <label for="customer_name" class="text-tagline-1 text-secondary font-medium dark:text-accent">Full Name</label>
          <input type="text" name="customer_name" id="customer_name" required value="{{ old('customer_name') }}"
            placeholder="Enter your name"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500" />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2">
          <label for="customer_email" class="text-tagline-1 text-secondary font-medium dark:text-accent">Email address</label>
          <input type="email" name="customer_email" id="customer_email" required value="{{ old('customer_email') }}"
            placeholder="Enter your email"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500" />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2">
          <label for="amount" class="text-tagline-1 text-secondary font-medium dark:text-accent">Amount (USD)</label>
          <input type="number" name="amount" id="amount" required min="5" step="0.01" value="{{ old('amount') }}"
            placeholder="e.g. 250.00"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500" />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2">
          <label for="description" class="text-tagline-1 text-secondary font-medium dark:text-accent">What is this payment for?</label>
          <textarea name="description" id="description" required
            placeholder="Describe the agreed scope / invoice reference..."
            class="rounded-xl placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 min-h-[120px] resize-none focus-visible:outline focus-visible:outline-primary-500 text-secondary dark:text-accent">{{ old('description') }}</textarea>
        </fieldset>

        <button type="submit" class="btn btn-secondary dark:btn-accent hover:btn-primary btn-md w-full before:content-none first-letter:uppercase">
          Continue to Payment
        </button>
      </form>

      <p class="text-tagline-3 text-secondary/50 dark:text-accent/50 text-center mt-6">
        Payments are processed securely by Stripe. We never see your card details.
      </p>
    </div>
  </div>
</section>
@endsection