@extends('layouts.app')

@section('content')
<!-- =========================
Privacy Policy Section
===========================-->
<!-- Cleaned up padding classes and used inline padding-top to guarantee menu clearance -->
<section class="pb-14 md:pb-16 lg:pb-[88px] relative z-0" style="padding-top: 160px;">
  <div class="main-container">
    <div data-ns-animate data-delay="0.3" class="space-y-3">
      <!-- Updated header color for light/dark mode -->
      <h1 class="text-secondary dark:text-accent text-4xl font-bold tracking-tight">Privacy Policy</h1>
      <!-- Updated paragraph color for light/dark mode -->
      <div class="space-y-7 text-secondary/60 dark:text-accent/60">
        <p>
          This Privacy Policy describes how Expert Dev ("we", "our", or "us") collects, uses, and protects your information when you use our website and services.
        </p>
        <p>
          By accessing our website or working with us, you agree to the collection and use of information in accordance with this policy.
        </p>
        <p>
          If you do not agree with this policy, please do not use our website or services.
        </p>
      </div>
    </div>

    <article class="terms-conditions-body mt-12 space-y-10">

      <!-- Information Collection -->
      <div data-ns-animate data-delay="0.4" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">1. Information We Collect</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          We may collect personal information such as your name, email address, phone number, and project details when you contact us or use our services.
        </p>
        <p class="text-secondary/60 dark:text-accent/60">
          We may also collect non-personal data such as browser type, IP address, and usage data to improve our website and services.
        </p>
      </div>

      <!-- Use of Information -->
      <div data-ns-animate data-delay="0.5" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">2. How We Use Your Information</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Your information is used to:
        </p>
        <ul class="text-secondary/60 dark:text-accent/60 list-disc list-inside space-y-2 text-base">
          <li>Provide and manage our services</li>
          <li>Communicate with you regarding your project or inquiries</li>
          <li>Improve our website and user experience</li>
          <li>Send important updates or service-related notifications</li>
        </ul>
      </div>

      <!-- Data Sharing -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">3. Data Sharing & Disclosure</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          We do not sell or rent your personal information. We may share your data with trusted third-party service providers only when necessary to deliver our services (such as hosting or payment processing).
        </p>
        <p class="text-secondary/60 dark:text-accent/60">
          We may also disclose information if required by law or to protect our legal rights.
        </p>
      </div>

      <!-- Data Security -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">4. Data Security</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          We implement reasonable technical and organizational measures to protect your personal information from unauthorized access, disclosure, or misuse.
        </p>
        <p class="text-secondary/60 dark:text-accent/60">
          However, no method of transmission over the internet is completely secure, and we cannot guarantee absolute security.
        </p>
      </div>

      <!-- Data Retention -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">5. Data Retention</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          We retain your information only for as long as necessary to fulfill the purposes outlined in this policy, including legal, accounting, or reporting requirements.
        </p>
      </div>

      <!-- Cookies -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">6. Cookies & Tracking</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Our website may use cookies and similar technologies to enhance user experience and analyze website traffic. You can choose to disable cookies through your browser settings.
        </p>
      </div>

      <!-- User Rights -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">7. Your Rights</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          You have the right to request access to, correction of, or deletion of your personal data. You may also object to or restrict certain types of data processing.
        </p>
        <p class="text-secondary/60 dark:text-accent/60">
          To exercise these rights, please contact us directly.
        </p>
      </div>

      <!-- Third-Party Links -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">8. Third-Party Links</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those external sites.
        </p>
      </div>

      <!-- Updates -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">9. Changes to This Policy</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated effective date.
        </p>
      </div>

      <!-- Contact -->
      <div data-ns-animate data-delay="0.6" class="space-y-4">
        <h3 class="text-secondary dark:text-accent text-xl font-medium">10. Contact Us</h3>
        <p class="text-secondary/60 dark:text-accent/60">
          If you have any questions about this Privacy Policy or how your data is handled, please contact us through our website.
        </p>
      </div>

    </article>
  </div>
</section>
@endsection