@extends('layouts.app')

@section('content')
<section class="pb-16 md:pb-20 lg:pb-[95px] xl:pb-[100px] relative z-0" style="padding-top: 160px;">
  <div
    data-ns-animate
    data-delay="0.1"
    class="max-w-[1440px] w-full mx-auto rounded-2xl space-y-[70px] bg-background-2 dark:bg-background-8 py-[100px] px-5 md:px-6 lg:px-10 xl:px-16 border border-stroke-1 dark:border-white/5 shadow-sm"
  >
    <div class="max-w-2xl mx-auto text-center space-y-3">
      <span data-ns-animate data-delay="0.2" class="badge badge-cyan">Engagement Models</span>
      <h1 data-ns-animate data-delay="0.3" class="text-secondary dark:text-accent text-heading-3 md:text-heading-2">Transparent pricing for custom software.</h1>
      <p class="text-secondary/60 dark:text-accent/60">Choose the engagement model that best aligns with your project scope, timeline, and business goals.</p>
    </div>
    <div class="grid grid-cols-12 gap-8">
      
      <div class="col-span-12 md:col-span-6 xl:col-span-3">
        <div data-ns-animate data-delay="0.4" class="h-full flex flex-col">
          <div class="rounded-[20px] py-8 px-6 bg-background-3 dark:bg-background-7 space-y-8 border border-stroke-1 dark:border-white/5">
            <div>
              <p class="text-tagline-1 font-medium mb-3 text-secondary/60 dark:text-accent/60">Quick Resolutions</p>
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">Bug Fixes</h3>
              <div class="mt-4 flex items-baseline text-secondary dark:text-accent">
                <span class="text-heading-3 font-bold">$10</span>
                <span class="ml-1 text-secondary/60 dark:text-accent/60 text-sm">/fix</span>
              </div>
              <p class="text-secondary/60 dark:text-accent/60 text-sm mt-2">Best for smaller bug fixes</p>
            </div>
            <a href="{{ url('contact') }}" class="btn btn-white hover:btn-primary dark:btn-white-dark btn-md w-full before:content-none first-letter:uppercase">
              Get Started
            </a>
          </div>
          <div class="rounded-[20px] bg-background-1 dark:bg-background-6 mt-6 border border-stroke-1 dark:border-white/5 flex-1">
            <ul>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8">
                <p class="font-medium text-secondary dark:text-accent">Issue Diagnosis</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                 <p class="text-secondary/60 dark:text-accent/60 text-sm">Code Patching</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                 <p class="text-secondary/60 dark:text-accent/60 text-sm">QA & Testing</p>
              </li>
              <li class="h-14 px-6 py-4 text-center"></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-span-12 md:col-span-6 xl:col-span-3">
        <div data-ns-animate data-delay="0.5" class="h-full flex flex-col">
          <div class="rounded-[20px] py-8 px-6 bg-background-3 dark:bg-background-7 space-y-8 border border-stroke-1 dark:border-white/5">
            <div>
              <p class="text-tagline-1 font-medium mb-3 text-secondary/60 dark:text-accent/60">Feature Updates</p>
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">Improvements</h3>
              <div class="mt-4 flex items-baseline text-secondary dark:text-accent">
                <span class="text-heading-3 font-bold">$40</span>
                <span class="ml-1 text-secondary/60 dark:text-accent/60 text-sm">/task</span>
              </div>
              <p class="text-secondary/60 dark:text-accent/60 text-sm mt-2">Best for feature additions</p>
            </div>
            <a href="{{ url('contact') }}" class="btn btn-white hover:btn-primary dark:btn-white-dark btn-md w-full before:content-none first-letter:uppercase">
              Get Started
            </a>
          </div>
          <div class="rounded-[20px] bg-background-1 dark:bg-background-6 mt-6 border border-stroke-1 dark:border-white/5 flex-1">
            <ul>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8">
                <p class="font-medium text-secondary dark:text-accent">UI/UX Enhancements</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                 <p class="text-secondary/60 dark:text-accent/60 text-sm">Performance Optimization</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                 <p class="text-secondary/60 dark:text-accent/60 text-sm">Minor API Integrations</p>
              </li>
              <li class="h-14 px-6 py-4 text-center"></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-span-12 md:col-span-6 xl:col-span-3">
        <div data-ns-animate data-delay="0.6" class="h-full flex flex-col">
          <div class="rounded-[20px] relative py-8 px-6 bg-secondary dark:bg-background-5 space-y-8 overflow-hidden border border-stroke-1 dark:border-white/5">
            <div class="relative z-10">
              <p class="text-tagline-1 text-accent/60 font-medium mb-3">End-to-End</p>
              <h3 class="text-heading-5 font-normal text-white dark:text-accent">Projects</h3>
              <div class="mt-4 flex items-baseline text-white dark:text-accent">
                <span class="text-heading-3 font-bold">$100</span>
                <span class="ml-1 text-accent/60 text-sm">/starting at</span>
              </div>
              <p class="text-accent/60 text-sm mt-2">Best for standard apps</p>
            </div>
            <a href="{{ url('contact') }}" class="btn btn-primary btn-md hover:btn-white dark:hover:btn-accent w-full relative z-10 before:content-none first-letter:uppercase">
              Start Project
            </a>
          </div>
          <div class="rounded-[20px] bg-background-1 dark:bg-background-6 mt-6 border border-stroke-1 dark:border-white/5 flex-1">
            <ul>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8">
                <p class="font-medium text-secondary dark:text-accent">Full-Stack Development</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                <p class="text-secondary/60 dark:text-accent/60 text-sm">Database & API Design</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                 <p class="text-secondary/60 dark:text-accent/60 text-sm">Milestone Delivery</p>
              </li>
              <li class="h-14 px-6 py-4 text-center"></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-span-12 md:col-span-6 xl:col-span-3">
        <div data-ns-animate data-delay="0.7" class="h-full flex flex-col">
          <div class="rounded-[20px] py-8 px-6 bg-background-3 dark:bg-background-7 space-y-8 border border-stroke-1 dark:border-white/5">
            <div>
              <p class="text-tagline-1 font-medium mb-3 text-secondary/60 dark:text-accent/60">Large Scale</p>
              <h3 class="text-heading-5 font-normal text-secondary dark:text-accent">Enterprise</h3>
              <div class="mt-4 flex items-baseline text-secondary dark:text-accent">
                <span class="text-heading-3 font-bold">$200</span>
                <span class="ml-1 text-secondary/60 dark:text-accent/60 text-sm">/starting at</span>
              </div>
              <p class="text-secondary/60 dark:text-accent/60 text-sm mt-2">For complex, multi-platform systems</p>
            </div>
            <a href="{{ url('contact') }}" class="btn btn-white dark:btn-white-dark hover:btn-primary btn-md w-full before:content-none first-letter:uppercase">
              Let's Talk
            </a>
          </div>
          <div class="rounded-[20px] bg-background-1 dark:bg-background-6 mt-6 border border-stroke-1 dark:border-white/5 flex-1">
            <ul>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8">
                <p class="font-medium text-secondary dark:text-accent">Custom Architecture</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                 <p class="text-secondary/60 dark:text-accent/60 text-sm">Cross-Platform Solutions</p>
              </li>
              <li class="h-14 px-6 py-4 text-center border-b border-b-stroke-4 dark:border-stroke-8 flex items-center justify-center">
                 <p class="text-secondary/60 dark:text-accent/60 text-sm">Priority SLA Support</p>
              </li>
              <li class="h-14 px-6 py-4 text-center"></li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="py-[100px]">
  <div class="main-container">
    <div class="flex flex-col items-center justify-center gap-14 mx-auto max-w-5xl text-center">
      
      <div class="w-full flex flex-col items-center space-y-5">
        <span data-ns-animate data-delay="0.2" class="badge badge-cyan">Engineering Excellence</span>
        <div class="space-y-3">
          <h2 data-ns-animate data-delay="0.3" class="text-heading-3 md:text-heading-2 text-secondary dark:text-accent">
            Built to perform and scale
          </h2>
          <p data-ns-animate data-delay="0.4" class="text-secondary/60 dark:text-accent/60 max-w-[596px] mx-auto">
            We don't just write code; we engineer solutions. Our development practices ensure your application is fast, secure, and ready for future growth.
          </p>
        </div>
      </div>
        
      <ul class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full mt-8">
        <li data-ns-animate data-delay="0.5" class="flex flex-col items-center space-y-3">
          <span class="ns-shape-8 text-[36px] text-primary-500"></span>
          <div>
            <p class="font-medium text-lg text-secondary dark:text-accent">Modern Stack</p>
            <p class="text-tagline-2 text-secondary/60 dark:text-accent/60 mt-1">
              Leveraging Laravel, Nuxt, and Flutter for robust, cutting-edge applications.
            </p>
          </div>
        </li>
        <li data-ns-animate data-delay="0.6" class="flex flex-col items-center space-y-3">
          <span class="ns-shape-46 text-[36px] text-ns-cyan"></span>
          <div>
            <p class="font-medium text-lg text-secondary dark:text-accent">Cross-Platform</p>
            <p class="text-tagline-2 text-secondary/60 dark:text-accent/60 mt-1">
              Write once, deploy everywhere. High-fidelity mobile apps for iOS and Android.
            </p>
          </div>
        </li>
        <li data-ns-animate data-delay="0.7" class="flex flex-col items-center space-y-3">
          <span class="ns-shape-47 text-[36px] text-ns-green"></span>
          <div>
            <p class="font-medium text-lg text-secondary dark:text-accent">Clean Architecture</p>
            <p class="text-tagline-2 text-secondary/60 dark:text-accent/60 mt-1">
              Maintainable, well-documented codebases that save time and money down the line.
            </p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</section>

<section class="py-[50px] lg:py-[100px] relative z-10 border-t border-stroke-1 dark:border-white/5">
  <div class="main-container space-y-[70px]">
    <div class="text-center max-w-[650px] mx-auto space-y-5">
      <span data-ns-animate data-delay="0.2" class="badge badge-cyan">Contact Us</span>
      <div class="space-y-3">
        <h2 data-ns-animate data-delay="0.3" class="text-heading-3 md:text-heading-2 text-secondary dark:text-accent">Let us know how we can assist you</h2>
      </div>
    </div>
    <div
      data-ns-animate
      data-delay="0.4"
      class="p-6 lg:p-[42px] bg-white dark:bg-background-8 rounded-[20px] max-w-[850px] mx-auto md:w-full border border-stroke-1 dark:border-white/10 shadow-lg"
    >
      <form action="{{ url('contact') }}" method="post">
        @csrf
        <fieldset class="w-full flex flex-col gap-2 items-start justify-start mb-8">
          <label for="fullName" class="text-tagline-1 text-secondary font-medium dark:text-accent">Full Name</label>
          <input
            type="text"
            name="fullName"
            id="fullName"
            required
            placeholder="Enter your name"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500 placeholder:font-normal font-normal"
          />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2 items-start justify-start mb-8">
          <label for="emailAddress" class="text-tagline-1 text-secondary font-medium dark:text-accent">Email address</label>
          <input
            type="email"
            required
            name="emailAddress"
            id="emailAddress"
            placeholder="Enter your email"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500 placeholder:font-normal font-normal"
          />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2 items-start justify-start mb-4">
          <label for="messages" class="text-tagline-1 text-secondary font-medium dark:text-accent">Project Details</label>
          <textarea
            name="messages"
            id="messages"
            required
            placeholder="Tell us about your project requirements..."
            class="rounded-xl placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 min-h-[120px] resize-none focus-visible:outline focus-visible:outline-primary-500 text-secondary dark:text-accent placeholder:font-normal font-normal"
          ></textarea>
        </fieldset>

        <fieldset class="flex items-center gap-2 mb-8 mt-4">
          <label for="agree-terms" class="flex items-center gap-x-3">
            <input id="agree-terms" type="checkbox" class="sr-only peer" required />
            <span class="size-4 rounded-full border border-stroke-3 dark:border-stroke-7 relative after:absolute after:size-2.5 after:bg-primary-500 after:rounded-full after:top-1/2 after:left-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:opacity-0 peer-checked:after:opacity-100 peer-checked:border-primary-500 cursor-pointer"></span>
          </label>
          <label for="agree-terms" class="text-tagline-3 cursor-pointer text-secondary/60 dark:text-accent/60">
            I agree with the
            <a href="{{ url('terms-conditions') }}" class="text-primary-500 underline text-tagline-3">terms and conditions</a>
          </label>
        </fieldset>

        <button
          type="submit"
          class="btn btn-secondary dark:btn-accent hover:btn-primary btn-md w-full before:content-none first-letter:uppercase"
        >
          Send Message
        </button>
      </form>
    </div>
  </div>
</section>

<section class="py-[50px] md:py-20 lg:py-28 dark:bg-background-7 bg-background-3 border-t border-stroke-1 dark:border-white/5" aria-label="Use Case Overview">
  <div class="main-container">
    <div class="flex items-center flex-col lg:flex-row justify-between">
      <div class="xl:max-w-[650px] lg:max-w-[476px] w-full space-y-5 text-center lg:text-left">
        <span data-ns-animate data-delay="0.3" class="badge badge-green badge-cyan">Get started</span>
        <div class="space-y-3">
          <h2 data-ns-animate data-delay="0.4" class="text-secondary dark:text-accent text-heading-4 sm:text-heading-3 lg:text-heading-2">
            Ready to build your next big application?
          </h2>
          <p data-ns-animate data-delay="0.5" class="text-secondary/60 dark:text-accent/60">Enter your email to request a free consultation and technical review.</p>
        </div>
      </div>

      <div class="lg:basis-[466px] space-y-6 md:ml-0 xl:ml-[100px] pt-[40px] lg:pt-0 w-full sm:w-[80%] md:w-[60%]">
        <form data-ns-animate data-delay="0.6" action="{{ url('contact') }}" method="get" class="flex items-center flex-col gap-5 sm:flex-row justify-start lg:gap-3">
          <input
            type="email"
            name="email"
            placeholder="Enter your email"
            required
            class="px-[18px] shadow-sm h-12 py-3 placeholder:text-secondary/50 rounded-full border border-stroke-1 lg:max-w-[340px] md:w-[71%] w-full dark:border-stroke-7 dark:placeholder:text-accent/60 focus:outline-none focus:border-primary-600 dark:focus:border-primary-400 dark:bg-background-8 text-secondary dark:text-accent"
          />
          <button type="submit" class="btn btn-md btn-primary h-12 w-full sm:w-[35%] lg:w-auto hover:btn-secondary dark:hover:btn-white">
            <span>Get Quote</span>
          </button>
        </form>
        <ul class="flex flex-row items-center justify-center gap-x-4 sm:gap-x-6 gap-y-5 lg:justify-start">
          <li data-ns-animate data-delay="0.7" class="flex items-center justify-center gap-2">
            <span class="size-[18px] bg-secondary dark:bg-accent rounded-full flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none" aria-hidden="true" class="fill-white dark:fill-secondary">
                <path d="M4.31661 6.75605L9.74905 1.42144C10.0836 1.0959 10.0836 0.569702 9.74905 0.244158C9.41446 -0.081386 8.87363 -0.081386 8.53904 0.244158L3.7116 4.99012L1.46096 2.78807C1.12636 2.46253 0.585538 2.46253 0.250945 2.78807C-0.0836483 3.11362 -0.0836483 3.63982 0.250945 3.96536L3.1066 6.75605C3.27347 6.91841 3.49253 7 3.7116 7C3.93067 7 4.14974 6.91841 4.31661 6.75605Z" />
              </svg>
            </span>
            <p class="text-tagline-3 sm:text-tagline-2 text-secondary/80 dark:text-accent/80">No commitment required</p>
          </li>
          <li data-ns-animate data-delay="0.8" class="flex items-center justify-center gap-2">
            <span class="size-[18px] bg-secondary dark:bg-accent rounded-full flex items-center justify-center shrink-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="7" viewBox="0 0 10 7" fill="none" aria-hidden="true" class="fill-white dark:fill-secondary">
                <path d="M4.31661 6.75605L9.74905 1.42144C10.0836 1.0959 10.0836 0.569702 9.74905 0.244158C9.41446 -0.081386 8.87363 -0.081386 8.53904 0.244158L3.7116 4.99012L1.46096 2.78807C1.12636 2.46253 0.585538 2.46253 0.250945 2.78807C-0.0836483 3.11362 -0.0836483 3.63982 0.250945 3.96536L3.1066 6.75605C3.27347 6.91841 3.49253 7 3.7116 7C3.93067 7 4.14974 6.91841 4.31661 6.75605Z" />
              </svg>
            </span>
            <p class="text-tagline-3 sm:text-tagline-2 text-secondary/80 dark:text-accent/80">Free project scoping</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection