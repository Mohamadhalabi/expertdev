@extends('layouts.app')

@section('content')
<!-- =========================
Services section
===========================-->
<section class="md:pt-42 sm:pt-36 pt-32 pb-24 md:pb-32 lg:pb-44">
  <div class="main-container">
    <div class="space-y-5 mb-[70px] text-center flex flex-col items-center">
      <span data-ns-animate data-delay="0.2" class="badge badge-green">Our Services</span>
      <h2 data-ns-animate data-delay="0.3">Custom Web & Mobile Solutions</h2>
    </div>

    <div class="space-y-[42px] flex flex-col gap-4">
      <!-- Web Development -->
      <div data-ns-animate data-delay="0.4" class="p-7 lg:p-[60px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6 flex flex-col items-center text-center mx-auto w-full max-w-4xl">
        <div class="space-y-8">
          <div class="space-y-4 flex flex-col items-center">
            <h3>Custom Web Development</h3>
            <p class="max-w-[600px] w-full mx-auto">
              We build highly scalable, fast, and secure web applications. From complex B2B portals to robust e-commerce platforms, we engineer responsive digital experiences that drive growth.
            </p>
          </div>
          <div>
            <a href="{{ url('contact') }}" class="btn hover:btn-primary btn-white dark:btn-transparent btn-md">
              <span>Start your project</span>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Mobile Development -->
      <div data-ns-animate data-delay="0.5" class="p-7 lg:p-[60px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6 flex flex-col items-center text-center mx-auto w-full max-w-4xl">
        <div class="space-y-8">
          <div class="space-y-4 flex flex-col items-center">
            <h3>Native & Cross-Platform Mobile Apps</h3>
            <p class="max-w-[600px] w-full mx-auto">
              Deliver exceptional native experiences across iOS and Android. We utilize modern frameworks to ensure your mobile application is fast, intuitive, and seamlessly integrated with your backend systems.
            </p>
          </div>
          <div>
            <a href="{{ url('contact') }}" class="btn hover:btn-primary dark:btn-transparent btn-white btn-md">
              <span>Discuss your app idea</span>
            </a>
          </div>
        </div>
      </div>
      
      <!-- API & Backend -->
      <div data-ns-animate data-delay="0.6" class="p-7 lg:p-[60px] rounded-[20px] border border-stroke-1 dark:border-stroke-7 bg-background-1 dark:bg-background-6 flex flex-col items-center text-center mx-auto w-full max-w-4xl">
        <div class="space-y-8">
          <div class="space-y-4 flex flex-col items-center">
            <h3>Backend Architecture & APIs</h3>
            <p class="max-w-[600px] w-full mx-auto">
              The foundation of every great app is a solid backend. We design robust databases, secure RESTful APIs, and integrate third-party services to ensure your platform handles heavy traffic flawlessly.
            </p>
          </div>
          <div>
            <a href="{{ url('contact') }}" class="btn hover:btn-primary dark:btn-transparent btn-white btn-md">
              <span>Get technical support</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
Feature section
===========================-->
<section class="relative overflow-hidden">
  <div class="main-container">
    <div class="flex flex-col items-center gap-y-12">
      <div class="w-full max-w-3xl text-center flex flex-col items-center">
        <span data-ns-animate data-delay="0.1" class="badge badge-green-v2 mb-5"> Why Expert Dev </span>
        <h2 data-ns-animate data-delay="0.2" class="mb-8 max-w-[520px] mx-auto">
          Streamline your business operations with custom software.
        </h2>
        <ul class="space-y-4 mb-14 mx-auto max-w-md">
          <li data-ns-animate data-delay="0.3" class="flex items-center justify-center gap-2 text-center">
            <span class="text-secondary/40 dark:text-accent/60">Clean, scalable, and maintainable codebase.</span>
          </li>
          <li data-ns-animate data-delay="0.4" class="flex items-center justify-center gap-2 text-center">
            <span class="text-secondary/40 dark:text-accent/60">Modern frameworks built for lightning-fast performance.</span>
          </li>
          <li data-ns-animate data-delay="0.5" class="flex items-center justify-center gap-2 text-center">
            <span class="text-secondary/40 dark:text-accent/60">End-to-end service from design to deployment.</span>
          </li>
        </ul>
        <div data-ns-animate data-delay="0.6">
          <a href="{{ url('contact') }}" class="btn btn-xl dark:btn-transparent hover:btn-primary btn-white">
            <span>Consult an Expert</span>
          </a>
        </div>
      </div>
      
      <div data-ns-animate data-delay="0.3" class="w-full max-w-2xl mx-auto">
        <div class="rounded-[20px] bg-background-3 dark:bg-background-5 p-5 lg:p-8 relative overflow-hidden text-center flex flex-col items-center">
          <div class="bg-white dark:bg-background-8 p-6 lg:p-10 rounded-2xl w-full">
            <h5 class="mb-4 text-center">Dedicated Technical Team</h5>
            <p class="text-secondary/60 dark:text-accent/60 text-tagline-2 font-medium max-w-[500px] mx-auto">
              Partner with seasoned developers who prioritize your long-term success over quick fixes. We act as an extension of your internal team.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
CTA section
===========================-->
<section class="pb-6 pt-6 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
  <div class="main-container">
    <div class="text-center flex flex-col items-center">
      <h2 data-ns-animate data-delay="0.1" class="mb-3">
        Ready to engineer your <span class="text-primary-500">digital future?</span>
      </h2>
      <p data-ns-animate data-delay="0.2" class="mb-8 lg:max-w-[390px] mx-auto text-center">
        Let’s discuss your technical requirements and map out a solution tailored for growth.
      </p>
      <div data-ns-animate data-delay="0.3">
        <a href="{{ url('contact') }}" class="btn btn-primary hover:btn-white-dark dark:hover:btn-white btn-md block w-full md:w-auto md:inline-block text-center mx-auto text-tagline-2">
          <span>Start a conversation</span>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection