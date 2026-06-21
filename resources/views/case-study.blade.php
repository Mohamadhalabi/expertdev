@extends('layouts.app')

@section('content')
<!-- =========================
Case Study section
===========================-->
<!-- Using inline style for padding-top to bypass Tailwind compiler issues on mobile -->
<section class="pb-[20px] lg:pb-[100px] relative z-0" style="padding-top: 160px;">
  <div class="main-container">
    <div class="space-y-[70px]">
      <div class="max-w-[800px] space-y-3">
        <h1 id="case-study-title" data-ns-animate data-delay="0.2" class="text-heading-3 md:text-heading-2 font-normal text-secondary dark:text-accent">
          Engineering Scalable Solutions for Modern Businesses
        </h1>
        <p data-ns-animate data-delay="0.3" class="text-secondary/60 dark:text-accent/60">
          Explore our portfolio of high-performance web and mobile applications. Discover how our engineering team leverages modern frameworks like Laravel, Nuxt, and Flutter to solve complex technical challenges and drive business growth.
        </p>
      </div>

      <div class="space-y-4">
        <h2 data-ns-animate data-delay="0.4" class="text-heading-4 text-secondary dark:text-accent">Featured Case Study: Techno Lock Keys</h2>
        <ul class="max-w-[600px] space-y-2">
          <li data-ns-animate data-delay="0.5" data-instant class="text-secondary dark:text-accent text-lg leading-[150%] font-medium">
            Project:
            <span class="text-tagline-1 text-secondary/60 dark:text-accent/60 font-normal">Techno Lock Keys B2B E-Commerce & Trading Platform</span>
          </li>
          <li data-ns-animate data-delay="0.6" data-instant class="text-secondary dark:text-accent text-lg leading-[150%] font-medium">
            Tech Stack:
            <span class="text-tagline-1 text-secondary/60 dark:text-accent/60 font-normal">Nuxt 4 (Frontend), Laravel (Backend API), PostgreSQL</span>
          </li>
          <li data-ns-animate data-delay="0.7" data-instant class="text-secondary dark:text-accent text-lg leading-[150%] font-medium">
            Use case:
            <span class="text-tagline-1 text-secondary/60 dark:text-accent/60 font-normal">Real-time Automotive Security Trading & Global E-commerce</span>
          </li>
        </ul>
      </div>
      
      <a href="https://www.tlkeys.com" target="_blank" class="block w-max">
        <figure data-ns-animate data-delay="0.8" data-instant data-start="top 97%" class="max-w-[600px] overflow-hidden rounded-4xl border border-stroke-1 dark:border-white/10 bg-white">
          <img src="{{ asset('images/techno-lock-desktop-logo.webp') }}" alt="Techno Lock Keys Interface" class="size-full object-cover hover:scale-105 transition-transform duration-500" />
        </figure>
      </a>

      <div class="space-y-1 pt-5">
        <h3 data-ns-animate data-delay="0.1" class="text-heading-4 text-secondary dark:text-accent">The Challenge</h3>
        <p data-ns-animate data-delay="0.2" class="max-w-[705px] text-secondary/60 dark:text-accent/60">
          The client needed a robust, high-performance web platform to manage global trading of automotive security products. The system required real-time inventory synchronization, secure transaction processing, and a scalable backend architecture capable of handling high-volume B2B operations.
        </p>
      </div>

      <div class="flex flex-col items-start justify-between gap-16 md:flex-row">
        <div class="space-y-6 flex-1">
          <div>
            <h4 data-ns-animate data-delay="0.3" class="text-heading-4 text-secondary dark:text-accent">The Solution</h4>
            <p data-ns-animate data-delay="0.4" class="text-secondary/60 dark:text-accent/60">Expert Dev engineered a comprehensive digital solution:</p>
          </div>
          <ul class="space-y-4">
            <li data-ns-animate data-delay="0.3">
              <p class="text-secondary/60 dark:text-accent/60 before:bg-primary-500 before:mr-3 before:inline-block before:size-2 before:rounded-full before:content-['']">
                Developed a high-speed, SEO-optimized frontend utilizing Nuxt 4 for seamless user experiences.
              </p>
            </li>
            <li data-ns-animate data-delay="0.4">
              <p class="text-secondary/60 dark:text-accent/60 before:bg-primary-500 before:mr-3 before:inline-block before:size-2 before:rounded-full before:content-['']">
                Architected a highly secure, scalable REST API with Laravel to handle complex business logic and inventory management.
              </p>
            </li>
          </ul>
        </div>

        <div class="space-y-6 flex-1">
          <div>
            <h4 data-ns-animate data-delay="0.3" class="text-heading-4 text-secondary dark:text-accent">The Results</h4>
          </div>
          <ul class="space-y-4">
            <li data-ns-animate data-delay="0.3">
              <p class="text-secondary/60 dark:text-accent/60 before:bg-ns-green before:mr-3 before:inline-block before:size-2 before:rounded-full before:content-['']">
                Achieved seamless, real-time data synchronization between the central web platform and mobile endpoints.
              </p>
            </li>
            <li data-ns-animate data-delay="0.4">
              <p class="text-secondary/60 dark:text-accent/60 before:bg-ns-green before:mr-3 before:inline-block before:size-2 before:rounded-full before:content-['']">
                Significantly improved user engagement and conversion rates through a highly responsive interface.
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
More Projects
===========================-->
<section class="py-[50px] lg:py-[100px]">
  <div class="main-container">
    <div class="space-y-[70px]">
      <div class="space-y-3 text-center">
        <h2 id="success-stories-heading" data-ns-animate data-delay="0.1" class="text-heading-3 text-secondary dark:text-accent">
          Our Development Portfolio
        </h2>
        <p data-ns-animate data-delay="0.2" class="max-w-[738px] mx-auto text-secondary/60 dark:text-accent/60">
          A selection of our recently engineered web platforms and cross-platform mobile applications.
        </p>
      </div>

      <div class="space-y-14">
        <div class="grid grid-cols-12 items-start justify-center gap-8">
          
          <!-- Anadolu Anahtar Mobile -->
          <article data-ns-animate data-delay="0.2" class="group max-w-[409px] col-span-12 md:col-span-6 lg:col-span-4" itemscope itemtype="http://schema.org/Article">
           <a href="https://play.google.com/store/apps/details?id=com.anadolu.anahtar&hl=en" target="_blank" class="block h-full">
             <div class="bg-white dark:bg-background-6 rounded-[20px] scale-100 hover:scale-[102%] transition-transform duration-500 border border-stroke-1 dark:border-white/10 shadow-sm dark:shadow-none h-full flex flex-col">
              <figure class="w-full h-[260px] overflow-hidden rounded-t-[20px] bg-white p-4 flex items-center justify-center">
                <img src="{{ asset('images/aanahtar-logo.webp') }}" alt="Anadolu Anahtar Mobile App" class="max-h-full max-w-full object-contain" itemprop="image" />
              </figure>
            
              <div class="p-6 space-y-4 flex-1">
                <h3 class="text-heading-5 text-secondary dark:text-accent" itemprop="headline">Anadolu Anahtar Mobile</h3>
                <p class="text-secondary/60 dark:text-accent/60 text-sm" itemprop="description">A high-performance, cross-platform mobile application developed with <strong>Flutter</strong>, providing intuitive booking for automotive locksmith professionals.</p>
              </div>
            </div>
            </a>
          </article>

          <!-- Techno Lock Keys Mobile -->
          <article data-ns-animate data-delay="0.3" class="group max-w-[409px] col-span-12 md:col-span-6 lg:col-span-4" itemscope itemtype="http://schema.org/Article">
           <a href="https://play.google.com/store/apps/details?id=com.technolock.technolockkeys" target="_blank" class="block h-full">
            <div class="bg-white dark:bg-background-6 rounded-[20px] scale-100 hover:scale-[102%] transition-transform duration-500 border border-stroke-1 dark:border-white/10 shadow-sm dark:shadow-none h-full flex flex-col">
              <figure class="w-full h-[260px] overflow-hidden rounded-t-[20px] bg-white p-4 flex items-center justify-center">
                <img src="{{ asset('images/techno-lock-logo.webp') }}" alt="Techno Lock Keys Flutter App" class="max-h-full max-w-full object-contain" itemprop="image" />
              </figure>
              <div class="p-6 space-y-4 flex-1">
                <h3 class="text-heading-5 text-secondary dark:text-accent" itemprop="headline">Techno Lock Keys App</h3>
                <p class="text-secondary/60 dark:text-accent/60 text-sm" itemprop="description">A comprehensive mobile extension of the trading platform, engineered with <strong>Flutter</strong> to deliver a seamless shopping experience across iOS and Android.</p>
              </div>
            </div>
            </a>
          </article>

          <!-- K3ey.com -->
          <!-- <article data-ns-animate data-delay="0.4" class="group max-w-[409px] col-span-12 md:col-span-6 lg:col-span-4" itemscope itemtype="http://schema.org/Article">
            <a href="https://k3ey.com" target="_blank" class="block h-full">
              <div class="bg-white dark:bg-background-6 rounded-[20px] scale-100 hover:scale-[102%] transition-transform duration-500 border border-stroke-1 dark:border-white/10 shadow-sm dark:shadow-none h-full flex flex-col">
              <figure class="w-full h-[260px] overflow-hidden rounded-t-[20px] bg-white p-4 flex items-center justify-center">
                <img src="{{ asset('images/k3ey-logo.webp') }}" alt="K3ey.com Laravel Application" class="max-h-full max-w-full object-contain" itemprop="image" />
              </figure>
              <div class="p-6 space-y-4 flex-1">
                <h3 class="text-heading-5 text-secondary dark:text-accent" itemprop="headline">K3ey.com</h3>
                <p class="text-secondary/60 dark:text-accent/60 text-sm" itemprop="description">A secure, scalable web application architected with <strong>Laravel</strong>, designed to manage encrypted data distribution and specialized automotive tools.</p>
              </div>
            </div>
            </a>
          </article> -->

        </div>
      </div>
    </div>
  </div>
</section>
@endsection