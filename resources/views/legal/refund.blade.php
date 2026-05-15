@extends('layouts.app')

@section('content')
<!-- =========================
Refund guidelines section
===========================-->
<!-- Cleaned up padding classes and used inline padding-top to guarantee menu clearance -->
<section class="pb-14 md:pb-16 lg:pb-[88px] relative z-0" style="padding-top: 160px;">
  <div class="main-container px-6">
    <div class="refund-policy space-y-12">

      <!-- Header -->
      <div data-ns-animate data-delay="0.3" class="space-y-4">
        <h1 class="text-secondary dark:text-accent text-4xl font-bold tracking-tight">
          Refund Policy
        </h1>
        <p class="text-secondary/60 dark:text-accent/60 text-base leading-relaxed max-w-4xl">
          At Expert Dev, we provide professional web development services tailored to each client. 
          Due to the custom nature of our work, refunds are handled carefully and fairly, based on the stage of the project and work completed.
        </p>
      </div>

      <!-- Conditions -->
      <div data-ns-animate data-delay="0.5" class="space-y-6">
        <h3 class="text-secondary dark:text-accent text-lg font-semibold">
          Refund Eligibility
        </h3>

        <!-- Eligible -->
        <div>
          <p class="text-secondary/60 dark:text-accent/60 text-sm mb-2">You may be eligible for a partial or full refund if:</p>
          <ul class="text-secondary/60 dark:text-accent/60 list-disc list-inside space-y-2 text-base">
            <li>The project has not yet started.</li>
            <li>The request is made shortly after payment and before significant work has been completed.</li>
            <li>We are unable to deliver the agreed service due to internal limitations.</li>
          </ul>
        </div>

        <!-- Not Eligible -->
        <div>
          <p class="text-secondary/60 dark:text-accent/60 text-sm mb-2">Refunds are generally not provided if:</p>
          <ul class="text-secondary/60 dark:text-accent/60 list-disc list-inside space-y-2 text-base">
            <li>The project is already in progress or completed.</li>
            <li>Design, development, or consultation work has already been delivered.</li>
            <li>Delays are caused by lack of communication or missing requirements from the client.</li>
            <li>The request is based on a change of mind after work has started.</li>
            <li>The service matches the agreed scope but expectations differ subjectively.</li>
          </ul>
        </div>
      </div>

      <!-- Steps -->
      <div data-ns-animate data-delay="0.6" class="space-y-6">
        <h3 class="text-secondary dark:text-accent text-lg font-semibold">
          How to Request a Refund
        </h3>
        <p class="text-secondary/60 dark:text-accent/60 text-sm">
          To request a refund, please follow these steps:
        </p>

        <ol class="mt-4 space-y-6">

          <!-- Step 1 -->
          <li class="flex items-start gap-4 bg-background-1 dark:bg-background-6 rounded-xl p-6 border border-stroke-1 dark:border-white/10 shadow-lg">
            <div class="bg-ns-yellow text-secondary flex size-8 shrink-0 items-center justify-center rounded-full font-bold text-sm">1</div>
            <div>
              <p class="text-secondary dark:text-accent font-medium">Contact our team</p>
              <p class="text-secondary/60 dark:text-accent/60 text-sm">
                Visit our 
                <a href="{{ url('contact') }}" class="text-primary-500 underline">
                  Contact Page
                </a> 
                and submit your request.
              </p>
            </div>
          </li>

          <!-- Step 2 -->
          <li class="flex items-start gap-4 bg-background-1 dark:bg-background-6 rounded-xl p-6 border border-stroke-1 dark:border-white/10 shadow-lg">
            <div class="bg-ns-green text-secondary flex size-8 shrink-0 items-center justify-center rounded-full font-bold text-sm">2</div>
            <div>
              <p class="text-secondary dark:text-accent font-medium">Provide project details</p>
              <p class="text-secondary/60 dark:text-accent/60 text-sm">
                Include your email, phone number, project details, and reason for the request.
              </p>
            </div>
          </li>

          <!-- Step 3 -->
          <li class="flex items-start gap-4 bg-background-1 dark:bg-background-6 rounded-xl p-6 border border-stroke-1 dark:border-white/10 shadow-lg">
            <div class="bg-ns-cyan text-secondary flex size-8 shrink-0 items-center justify-center rounded-full font-bold text-sm">3</div>
            <div>
              <p class="text-secondary dark:text-accent font-medium">Review & processing</p>
              <p class="text-secondary/60 dark:text-accent/60 text-sm">
                Our team will review your request based on the project status and respond with the outcome. 
                Approved refunds will be processed to the original payment method.
              </p>
            </div>
          </li>

        </ol>
      </div>

      <!-- Processing time -->
      <div data-ns-animate data-delay="0.7" class="space-y-2">
        <h3 class="text-secondary dark:text-accent text-lg font-semibold">
          Refund Processing Time
        </h3>
        <p class="text-secondary/60 dark:text-accent/60 text-base leading-relaxed">
          If approved, refunds are typically processed within 5–10 business days, depending on your payment provider.
        </p>
      </div>

      <!-- Feedback -->
      <div data-ns-animate data-delay="0.8" class="space-y-2">
        <h3 class="text-secondary dark:text-accent text-lg font-semibold">
          Need Help?
        </h3>
        <p class="text-secondary/60 dark:text-accent/60 text-base leading-relaxed">
          If you have any questions regarding your project or this policy, feel free to contact us. 
          We are committed to finding fair solutions and ensuring client satisfaction.
        </p>
      </div>

    </div>
  </div>
</section>
@endsection