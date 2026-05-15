@extends('layouts.app')

@section('content')
<!-- =========================
Terms & Conditions Section
===========================-->
<!-- Cleaned up padding classes and used inline padding-top to guarantee menu clearance -->
<section class="pb-14 md:pb-16 lg:pb-[88px] relative z-0" style="padding-top: 160px;">
  <div class="main-container">
    <div data-ns-animate data-delay="0.3" class="space-y-3">
      <!-- Updated header color for light/dark mode -->
      <h1 class="text-secondary dark:text-accent text-4xl font-bold tracking-tight">Terms & Conditions</h1>
      <!-- Updated paragraph color for light/dark mode -->
      <div class="space-y-7 text-secondary/60 dark:text-accent/60">
        <p>
          This website, expertdev.net (referred to as "Expert Dev", "we", or "our"), provides web development and related digital services.
        </p>
        <p>
          By accessing our website or purchasing our services, you agree to be bound by these Terms and Conditions. These terms govern all projects, communications, and transactions between you (the "client") and Expert Dev.
        </p>
        <p>
          If you do not agree with these terms, you should not use our services.
        </p>
      </div>
    </div>

    <article class="terms-conditions-body mt-12 space-y-10">

      <!-- Liability -->
      <div data-ns-animate data-delay="0.4" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">1. Limitation of Liability</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Expert Dev shall not be held liable for any indirect, incidental, or consequential damages, including loss of data, revenue, or business opportunities, resulting from the use or inability to use our services, websites, or deliverables.
        </p>
      </div>

      <!-- Services -->
      <div data-ns-animate data-delay="0.5" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">2. Services & Project Scope</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          All services are provided based on the agreed project scope, requirements, and timeline. Any additional features, revisions beyond the agreed scope, or new requests may require additional time and cost.
        </p>
      </div>

      <!-- Payments -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">3. Payments & Fees</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Projects may require an upfront deposit before work begins. Final deliverables will not be released until full payment has been received. All payments are non-refundable except as outlined in our refund policy.
        </p>
      </div>

      <!-- Ownership -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">4. Ownership & Intellectual Property</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Upon full payment, the client will receive rights to the final delivered project. Expert Dev retains the right to reuse non-confidential components, frameworks, and general knowledge used during development.
        </p>
      </div>

      <!-- Refund -->
      <div data-ns-animate data-delay="0.3" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">5. Refund Policy</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Refunds are handled based on the stage of the project and work completed. Due to the custom nature of development services, refunds are not guaranteed once work has started.
        </p>
        <div class="pt-4">
            <a href="{{ url('refund-policy') }}" class="btn dark:btn-accent hover:btn-primary btn-md btn-secondary">
                <span>View Full Refund Policy</span>
            </a>
        </div>
      </div>

      <!-- Client Responsibilities -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">6. Client Responsibilities</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          The client agrees to provide all required content, feedback, and approvals in a timely manner. Delays caused by missing information or lack of communication may affect delivery timelines and are not the responsibility of Expert Dev.
        </p>
      </div>

      <!-- Termination -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">7. Account & Service Termination</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Expert Dev reserves the right to suspend or terminate services in cases of abusive behavior, non-payment, or violation of these terms.
        </p>
      </div>

    </article>
  </div>
</section>
@endsection