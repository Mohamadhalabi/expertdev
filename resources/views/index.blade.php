@extends('layouts.app')

@section('title', 'Expert Dev | Custom Web & Mobile Application Development')

@section('content')
    <section class="pt-[150px] md:pt-[190px] lg:pt-[230px] overflow-hidden relative">
      <div class="absolute top-20 z-[-1] left-1/2 -translate-x-1/2" data-ns-animate data-delay="0.3" data-offset="20">
        <img src="{{ asset('images/ns-img-150.png') }}" alt="Hero background pattern" class="dark:hidden" />
        <img src="{{ asset('images/ns-img-dark-104.png') }}" alt="Hero background pattern" class="hidden dark:inline-block" />
      </div>
      <div class="main-container relative z-10">
        <div class="flex flex-col items-center justify-center mb-14">
          <div class="max-w-[1075px] mb-14 space-y-4 w-full mx-auto text-center">
            <h1 data-ns-animate data-delay="0.2">
              Transforming Ideas into <span class="text-primary-500">Scalable Software</span>
            </h1>
            <p data-ns-animate data-delay="0.3" class="max-w-[650px] mx-auto">
              Expert Dev is a premier software development agency specializing in custom web and mobile applications. We build fast, secure, and intuitive digital products designed to scale your business.
            </p>
          </div>
          <ul class="flex flex-col max-md:items-center text-center max-md:justify-center md:flex-row gap-4 w-[90%] md:w-auto">
            <li data-ns-animate data-delay="0.4" data-direction="left" data-offset="50" class="w-full sm:w-auto">
              <a href="{{ url('contact') }}" class="btn btn-xl btn-secondary dark:btn-accent hover:btn-white w-[90%] md:w-auto dark:hover:btn-white-dark" aria-label="Start your project">
                <span>Start your project</span>
              </a>
            </li>
            <li data-ns-animate data-delay="0.5" data-direction="left" data-offset="50" class="w-full sm:w-auto">
              <a href="{{ url('services') }}" class="btn btn-xl dark:btn-white-dark hover:btn-secondary btn-white dark:hover:btn-accent w-[90%] md:w-auto" aria-label="Explore our services">
                <span>Explore our services</span>
              </a>
            </li>
          </ul>
        </div>
        <figure data-ns-animate data-delay="0.6" data-offset="100" class="max-w-[1290px] w-full">
          <img src="{{ asset('images/ns-img-151.png') }}" alt="Custom mobile and web application dashboard developed by Expert Dev" class="dark:hidden size-full object-cover scale-[150%] md:scale-100" />
          <img src="{{ asset('images/ns-img-dark-105.png') }}" alt="Custom mobile and web application dashboard developed by Expert Dev" class="hidden dark:block size-full object-cover scale-[150%] md:scale-100" />
        </figure>
      </div>
    </section>

    <section class="bg-background-4 dark:bg-background-5">
      <div class="main-container">
        <div class="flex lg:flex-row flex-col items-start lg:gap-[100px] md:gap-y-20 gap-y-10 pt-14 md:pt-16 lg:pt-[88px] xl:pt-[150px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[150px]">
          <div class="w-full lg:flex-1 lg:sticky lg:top-28 lg:max-w-full max-w-[520px] lg:mx-0 mx-auto text-center lg:text-left">
            <span data-ns-animate data-delay="0.2" class="badge badge-green mb-5"> Who We Help </span>
            <h2 data-ns-animate data-delay="0.3" class="mb-3">
              Engineered for startups,
              <span class="text-primary-500">enterprises & visionaries</span>
            </h2>
            <p data-ns-animate data-delay="0.4" class="mb-14 lg:max-w-[620px]">
              We turn complex business challenges into strategic, user-first digital products. Whether you need a cross-platform mobile app or a heavy-duty web portal, our engineering team delivers.
            </p>
            <div data-ns-animate data-delay="0.5">
              <a href="{{ url('case-study') }}" class="btn btn-secondary hover:btn-white btn-md dark:btn-transparent dark:hover:btn-accent w-[85%] md:w-auto">
                <span>View our portfolio</span>
              </a>
            </div>
          </div>

          <div class="w-full lg:flex-1 stack-cards js-stack-cards lg:max-w-full md:max-w-[65%] max-w-[90%] lg:mx-0 mx-auto">
            <div class="p-8 bg-background-1 dark:bg-background-6 rounded-xl space-y-6 stack-cards__item js-stack-cards__item border border-stroke-1/90 dark:border-stroke-5 max-sm:min-h-[255px]">
              <span class="block ns-shape-19 text-heading-2 text-secondary dark:text-accent"></span>
              <div class="space-y-1">
                <h3 class="text-xl font-bold">Startups & MVPs</h3>
                <p>Validate your idea quickly with rapid prototyping and high-quality MVP development.</p>
              </div>
            </div>

            <div class="p-8 bg-background-1 dark:bg-background-6 rounded-xl space-y-6 stack-cards__item js-stack-cards__item border border-stroke-1/90 dark:border-stroke-5 max-sm:min-h-[255px]">
              <span class="block ns-shape-35 text-heading-2 text-secondary dark:text-accent"></span>
              <div class="space-y-1">
                <h3 class="text-xl font-bold">B2B & Enterprise Software</h3>
                <p>Automate workflows, digitize internal systems, and streamline your business operations.</p>
              </div>
            </div>

            <div class="p-8 bg-background-1 dark:bg-background-6 rounded-xl space-y-6 stack-cards__item js-stack-cards__item border border-stroke-1/90 dark:border-stroke-5 max-sm:min-h-[255px]">
              <span class="block ns-shape-4 text-heading-2 text-secondary dark:text-accent"></span>
              <div class="space-y-1">
                <h3 class="text-xl font-bold">E-Commerce Platforms</h3>
                <p>Scale your online sales with custom, high-converting digital storefronts and mobile apps.</p>
              </div>
            </div>

            <div class="p-8 bg-background-1 dark:bg-background-6 rounded-xl space-y-6 stack-cards__item js-stack-cards__item border border-stroke-1/90 dark:border-stroke-5 max-sm:min-h-[255px]">
              <span class="block ns-shape-21 text-heading-2 text-secondary dark:text-accent"></span>
              <div class="space-y-1">
                <h3 class="text-xl font-bold">Agencies & Partners</h3>
                <p>Seamlessly integrate our development expertise as your dedicated technical partner.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[150px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[150px] bg-background-3 dark:bg-background-7">
      <div class="main-container">
        <div class="text-center space-y-5 max-w-[650px] mx-auto mb-14">
          <span data-ns-animate data-delay="0.2" class="badge badge-green">Core Capabilities</span>
          <div>
            <h2 data-ns-animate data-delay="0.3">
              Full-Stack Development
              <span class="text-primary-500">Without Compromise</span>
            </h2>
          </div>
        </div>
        
        <div class="grid grid-cols-12 space-y-8 md:space-y-0 md:gap-8 mb-18">
          <div data-ns-animate data-delay="0.4" class="col-span-12 md:col-span-6 lg:col-span-8 p-6 rounded-[20px] border-8 border-white dark:border-background-9 dark:bg-background-7 bg-background-3 space-y-6">
            <div class="space-y-1">
              <h3 class="text-xl font-bold">Native & Cross-Platform Mobile Apps</h3>
              <p>We build highly responsive iOS and Android applications using industry-leading frameworks like Flutter, ensuring a native feel and exceptional performance.</p>
            </div>
            <figure class="w-full">
              <img src="{{ asset('images/ns-img-152.png') }}" alt="Mobile application development showcasing iOS and Android interfaces" class="w-full object-cover rounded-2xl block dark:hidden" />
              <img src="{{ asset('images/ns-img-dark-106.png') }}" alt="Mobile application development showcasing iOS and Android interfaces" class="w-full object-cover rounded-2xl hidden dark:block" />
            </figure>
          </div>
          
          <div data-ns-animate data-delay="0.5" class="col-span-12 md:col-span-6 lg:col-span-4 py-6 ps-6 rounded-[20px] border-8 border-white bg-background-3 dark:border-background-9 dark:bg-background-7 space-y-6 relative after:h-1/2 after:w-[calc(100%+16px)] after:absolute after:-left-2 after:right-0 after:bottom-0 after:bg-gradient-to-t after:from-black/0 to-white rounded-br-[20px] rounded-bl-[20px] overflow-hidden">
            <div class="space-y-1">
              <h3 class="text-xl font-bold">Custom Web Applications</h3>
              <p>Dynamic, SEO-friendly, and blazing fast web portals engineered with modern tools like Laravel and Nuxt.js.</p>
            </div>
            <figure class="w-full rounded-2xl overflow-hidden">
              <img src="{{ asset('images/ns-img-153.png') }}" alt="Web application dashboard and analytics" class="w-full object-cover block dark:hidden" />
              <img src="{{ asset('images/ns-img-dark-107.png') }}" alt="Web application dashboard and analytics" class="w-full object-cover hidden dark:block" />
            </figure>
          </div>
          
          <div data-ns-animate data-delay="0.6" class="col-span-12 md:col-span-6 lg:col-span-4 p-6 rounded-[20px] border-8 border-white bg-background-3 dark:border-background-9 dark:bg-background-7 space-y-6">
            <div class="space-y-1">
              <h3 class="text-xl font-bold">UI/UX Interface Design</h3>
              <p>User-centric design that prioritizes accessibility, engagement, and conversion rates.</p>
            </div>
            <figure class="w-full">
              <img src="{{ asset('images/ns-img-154.png') }}" alt="UI and UX wireframing and design process" class="w-full rounded-xl block dark:hidden" />
              <img src="{{ asset('images/ns-img-dark-108.png') }}" alt="UI and UX wireframing and design process" class="w-full rounded-xl hidden dark:block" />
            </figure>
          </div>
          
          <div data-ns-animate data-delay="0.7" class="col-span-12 md:col-span-6 lg:col-span-8 p-6 rounded-[20px] border-8 border-white bg-background-3 dark:border-background-9 dark:bg-background-7 space-y-6">
            <div class="space-y-1 max-w-[320px]">
              <h3 class="text-xl font-bold">Robust Backend & API Architecture</h3>
              <p>Scalable databases, secure PHP backends, Redis caching, and seamless third-party API integrations powering your applications.</p>
            </div>
            <figure class="w-full">
              <img src="{{ asset('images/ns-img-155.png') }}" alt="Secure server architecture and database management visualization" class="w-full h-full object-cover rounded-2xl block dark:hidden" />
              <img src="{{ asset('images/ns-img-dark-109.png') }}" alt="Secure server architecture and database management visualization" class="w-full h-full object-cover rounded-2xl hidden dark:block" />
            </figure>
          </div>
        </div>
        
        <div data-ns-animate data-delay="0.8" class="flex items-center justify-center">
          <a href="{{ url('contact') }}" class="btn btn-lg md:btn-xl btn-secondary hover:btn-white dark:hover:btn-accent dark:btn-transparent w-[85%] md:w-auto">
            <span> Discuss your technical needs</span>
          </a>
        </div>
      </div>
    </section>

    <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px]">
      <div class="main-container progress-container grid grid-cols-1 md:grid-cols-3 gap-8">
        <div data-ns-animate data-delay="0.2" class="flex flex-col space-y-3">
          <div class="w-full h-[2px] bg-stroke-2 relative dark:bg-stroke-6">
            <div class="absolute progress-line w-[25%] left-0 bg-ns-green top-0 h-full"></div>
          </div>
          <p class="text-tagline-2 text-primary-500">01</p>
          <div class="space-y-1">
            <h3 class="text-lg font-bold">Discovery & Strategy</h3>
            <p>
              We analyze your business requirements,<br class="md:block hidden" />
              define the technical scope, and map the architecture.
            </p>
          </div>
        </div>
        <div data-ns-animate data-delay="0.4" class="flex flex-col space-y-3">
          <div class="w-full h-[2px] bg-stroke-2 relative dark:bg-stroke-6">
            <div class="absolute progress-line w-[0%] left-0 bg-ns-green top-0 h-full"></div>
          </div>
          <p class="text-tagline-2 text-primary-500">02</p>
          <div class="space-y-1">
            <h3 class="text-lg font-bold">Agile Development</h3>
            <p class=" ">Our engineers build your software iteratively, ensuring transparency and flexibility.</p>
          </div>
        </div>
        <div data-ns-animate data-delay="0.6" class="flex flex-col space-y-3">
          <div class="w-full h-[2px] bg-stroke-2 relative dark:bg-stroke-6">
            <div class="absolute progress-line w-[0%] left-0 bg-ns-green top-0 h-full"></div>
          </div>
          <p class="text-tagline-2 text-primary-500">03</p>
          <div class="space-y-1">
            <h3 class="text-lg font-bold">Deployment & Maintenance</h3>
            <p>Rigorous testing, seamless App Store / Play Store deployment, and ongoing server support.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="pt-14 md:pt-16 lg:pt-[88px] xl:pt-[100px] pb-14 md:pb-16 lg:pb-[88px] xl:pb-[100px] bg-background-2 dark:bg-background-8 border-y border-stroke-1 dark:border-white/5">
      <div class="main-container">
        <div class="flex flex-col items-center justify-center">
          
          <div class="text-center max-w-[700px] mx-auto space-y-5 mb-14">
            <span data-ns-animate data-delay="0.2" class="badge badge-cyan">
              The Expert Dev Advantage
            </span>
            <div class="space-y-3">
              <h2 data-ns-animate data-delay="0.3" class="text-heading-4 md:text-heading-3 lg:text-heading-2 text-secondary dark:text-accent">
                Why businesses trust <span class="text-primary-500">Expert Dev</span>
              </h2>
            </div>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full">
            <div data-ns-animate data-delay="0.4" class="p-8 flex flex-col items-center text-center gap-4 rounded-2xl bg-white dark:bg-background-7 border border-stroke-1 dark:border-white/5 hover:border-primary-500/50 dark:hover:border-primary-500/50 shadow-sm hover:shadow-md transition-all duration-300 group cursor-default">
              <span class="ns-shape-8 text-[40px] text-primary-500 group-hover:scale-110 transition-transform duration-300"></span>
              <div>
                <h4 class="text-lg font-bold text-secondary dark:text-accent mb-2">Clean Architecture</h4>
                <p class="text-sm text-secondary/70 dark:text-accent/70">Clean, maintainable, and highly documented code built for long-term scaling.</p>
              </div>
            </div>

            <div data-ns-animate data-delay="0.5" class="p-8 flex flex-col items-center text-center gap-4 rounded-2xl bg-white dark:bg-background-7 border border-stroke-1 dark:border-white/5 hover:border-ns-cyan/50 dark:hover:border-ns-cyan/50 shadow-sm hover:shadow-md transition-all duration-300 group cursor-default">
              <span class="ns-shape-9 text-[40px] text-ns-cyan group-hover:scale-110 transition-transform duration-300"></span>
              <div>
                <h4 class="text-lg font-bold text-secondary dark:text-accent mb-2">Modern Frameworks</h4>
                <p class="text-sm text-secondary/70 dark:text-accent/70">Leveraging Laravel, Nuxt, and Flutter for lightning-fast application performance.</p>
              </div>
            </div>

            <div data-ns-animate data-delay="0.6" class="p-8 flex flex-col items-center text-center gap-4 rounded-2xl bg-white dark:bg-background-7 border border-stroke-1 dark:border-white/5 hover:border-ns-green/50 dark:hover:border-ns-green/50 shadow-sm hover:shadow-md transition-all duration-300 group cursor-default">
              <span class="ns-shape-12 text-[40px] text-ns-green group-hover:scale-110 transition-transform duration-300"></span>
              <div>
                <h4 class="text-lg font-bold text-secondary dark:text-accent mb-2">End-to-End Delivery</h4>
                <p class="text-sm text-secondary/70 dark:text-accent/70">Comprehensive service from initial UI/UX design to final App Store submission.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="pb-14 pt-14 md:pb-16 md:pt-16 lg:pb-[88px] lg:pt-[88px] xl:pb-[100px] xl:pt-[100px]">
      <div class="main-container">
        <div class="text-center max-w-[649px] mx-auto">
          <span data-ns-animate data-delay="0.2" class="badge badge-green mb-5">Let's Connect</span>
          <h2 data-ns-animate data-delay="0.3" class="mb-3">
            Ready to build
            <span class="text-primary-500">your next big idea?</span>
          </h2>
          <p data-ns-animate data-delay="0.4" class="mb-6">
            Partner with Expert Dev LLC to bring your web and mobile applications to life. We handle the tech so you can focus on growing your business.
          </p>

          <div data-ns-animate data-delay="0.5" class="md:inline-block text-center">
            <a href="{{ url('contact') }}" class="btn btn-secondary hover:btn-white dark:hover:btn-accent dark:btn-transparent btn-md w-[85%] md:w-auto">
              <span>Schedule your free consultation</span>
            </a>
          </div>
        </div>
      </div>
    </section>
@endsection