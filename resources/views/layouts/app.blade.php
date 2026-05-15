<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    
    <!-- Dynamic SEO Tags -->
    <title>{{ $seo_title ?? 'Expert Dev | Custom Web & Mobile Application Development' }}</title>
    <meta name="title" content="{{ $seo_title ?? 'Expert Dev | Custom Web & Mobile Application Development' }}" />
    <meta name="description" content="{{ $seo_description ?? 'Expert Dev specializes in high-performance custom web and mobile application development. We build scalable software for startups and enterprises.' }}" />
    <meta name="keywords" content="{{ $seo_keywords ?? 'custom software development, web development, mobile app development, expert dev' }}" />
    <meta name="author" content="Expert Dev" />
    
    <meta name="robots" content="noindex, nofollow" />
    <meta name="language" content="English" />
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Favicon and Icons -->
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    
    <!-- Bulletproof fixes for ultra-small 300px screens -->
    <style>
      /* 'clip' is strictly enforced by mobile browsers to destroy horizontal scroll */
      html, body {
        width: 100%;
        max-width: 100vw;
        overflow-x: clip; 
      }
      /* Force long words to wrap on tiny screens so they don't break the container */
      h1, h2, h3, h4, h5, h6, p, a, li, span {
        word-break: break-word;
        overflow-wrap: break-word;
      }
    </style>
</head>
<body class="bg-background-3 dark:bg-background-7 antialiased">
    
<!-- Main App Wrapper strictly clipping X-axis overflow -->
<div class="relative flex flex-col min-h-screen w-full max-w-[100vw] overflow-x-clip">
    
    <header>
      <!-- RESTORED ORIGINAL CLASSES: Fixed the 300px issue by using w-[calc(100%-1rem)] on mobile, returning to w-full on sm -->
      <div class="header-one lp:!max-w-[1290px] bg-background-2 dark:border-stroke-6 dark:bg-background-9 fixed top-5 left-1/2 z-50 mx-auto flex w-[calc(100%-1rem)] sm:w-full max-w-[350px] -translate-x-1/2 items-center justify-between rounded-full px-2.5 py-2.5 opacity-0 backdrop-blur-[15px] min-[425px]:max-w-[375px] min-[500px]:max-w-[450px] sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1140px] xl:py-0 dark:border" data-ns-animate data-direction="up" data-offset="100">
        <div>
          <a href="{{ url('/') }}">
            <span class="sr-only">Home</span>
            <!-- Desktop Logo -->
            <figure class="">
              <img src="{{ asset('images/shared/expert-dev-logo.png') }}" alt="Expert Dev" width="200" class="max-w-[20px]" />
            </figure>
            <!-- Mobile Logo -->
            <!-- <figure class="block max-w-[44px] lg:hidden">
              <img src="{{ asset('images/shared/logo.svg') }}" alt="Expert Dev" class="block w-full dark:hidden" />
              <img src="{{ asset('images/shared/logo-dark.svg') }}" alt="Expert Dev" class="hidden w-full dark:block" />
            </figure> -->
          </a>
        </div>
        
        <!-- Desktop Navigation -->
        <nav class="hidden items-center xl:flex">
          <ul class="flex items-center">
            <li class="nav-item relative cursor-pointer py-2.5">
              <a href="{{ url('services') }}" class="hover:border-stroke-2 dark:hover:border-stroke-7 text-tagline-1 text-secondary/60 hover:text-secondary dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 rounded-full border border-transparent px-4 py-2 font-normal transition-all duration-200">
                <span>Services</span>
              </a>
            </li>
            <li class="nav-item relative cursor-pointer py-2.5">
              <a href="{{ url('case-study') }}" class="hover:border-stroke-2 dark:hover:border-stroke-7 text-tagline-1 text-secondary/60 hover:text-secondary dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 rounded-full border border-transparent px-4 py-2 font-normal transition-all duration-200">
                <span>Portfolio</span>
              </a>
            </li>
            <li class="nav-item relative cursor-pointer py-2.5">
              <a href="{{ url('pricing') }}" class="hover:border-stroke-2 dark:hover:border-stroke-7 text-tagline-1 text-secondary/60 hover:text-secondary dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 rounded-full border border-transparent px-4 py-2 font-normal transition-all duration-200">
                <span>Pricing</span>
              </a>
            </li>
            <li class="nav-item relative cursor-pointer py-2.5">
              <a href="{{ url('about') }}" class="hover:border-stroke-2 dark:hover:border-stroke-7 text-tagline-1 text-secondary/60 hover:text-secondary dark:text-accent/60 dark:hover:text-accent flex items-center gap-1 rounded-full border border-transparent px-4 py-2 font-normal transition-all duration-200">
                <span>About Us</span>
              </a>
            </li>
          </ul>
        </nav>

        <div class="hidden items-center justify-center xl:flex">
          <a href="{{ url('contact') }}" class="btn btn-md hover:btn-white dark:hover:btn-white-dark btn-white-dark dark:btn-white">
            <span>Start Project</span>
          </a>
        </div>
        
        <!-- Mobile Nav Hamburger (Restored original sizing + forced high contrast colors) -->
        <div class="block xl:hidden">
          <button class="nav-hamburger bg-background-4 dark:bg-background-6 flex size-12 cursor-pointer flex-col items-center justify-center gap-[5px] rounded-full">
            <span class="sr-only">Menu</span>
            <span class="bg-secondary dark:bg-white block h-0.5 w-6"></span>
            <span class="bg-secondary dark:bg-white block h-0.5 w-6"></span>
            <span class="bg-secondary dark:bg-white block h-0.5 w-6"></span>
          </button>
        </div>
      </div>

      <!-- Mobile Menu Sidebar -->
      <aside class="sidebar dark:bg-background-8 scroll-bar fixed top-0 right-0 z-[9999] h-screen w-full translate-x-full rounded-l-3xl bg-white transition-all duration-300 sm:w-1/2 xl:hidden border-l border-stroke-1 dark:border-white/10 shadow-2xl">
        <div class="space-y-4 p-5 sm:p-8 lg:p-9">
          <div class="flex items-center justify-between">
            <a href="{{ url('/') }}">
              <span class="sr-only">Home</span>
              <figure class="max-w-[44px]">
                <img src="{{ asset('images/shared/logo.svg') }}" alt="Expert Dev" class="block w-full dark:hidden" />
                <img src="{{ asset('images/shared/logo-dark.svg') }}" alt="Expert Dev" class="hidden w-full dark:block" />
              </figure>
            </a>
            <!-- Mobile Close Button (Restored original sizing + forced high contrast colors) -->
            <button class="nav-hamburger-close bg-background-4 dark:bg-background-9 relative flex size-10 cursor-pointer flex-col items-center justify-center gap-1.5 rounded-full">
              <span class="sr-only">Close Menu</span>
              <span class="bg-secondary dark:bg-white absolute block h-0.5 w-4 rotate-45"></span>
              <span class="bg-secondary dark:bg-white absolute block h-0.5 w-4 -rotate-45"></span>
            </button>
          </div>
          <div class="scroll-bar mt-6 h-[85vh] w-full overflow-x-hidden overflow-y-auto pb-10">
            <p class="text-secondary dark:text-accent text-tagline-1 before:bg-stroke-4 dark:before:bg-stroke-6 relative mb-2 block font-normal before:absolute before:top-1/2 before:-right-16 before:h-px before:w-full before:-translate-y-1/2 before:content-['']">
              Menu
            </p>
            <ul class="space-y-2">
              <li><a href="{{ url('services') }}" class="text-tagline-1 text-secondary dark:text-accent block py-2.5 font-normal">Services</a></li>
              <li><a href="{{ url('case-study') }}" class="text-tagline-1 text-secondary dark:text-accent block py-2.5 font-normal">Portfolio</a></li>
              <li><a href="{{ url('pricing') }}" class="text-tagline-1 text-secondary dark:text-accent block py-2.5 font-normal">Pricing</a></li>
              <li><a href="{{ url('about') }}" class="text-tagline-1 text-secondary dark:text-accent block py-2.5 font-normal">About Us</a></li>
              <li><a href="{{ url('contact') }}" class="text-tagline-1 text-primary-500 font-bold block py-2.5">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </aside>
    </header>

    <main class="flex-1 w-full">
        @yield('content')
    </main>

    <footer class="bg-secondary dark:bg-background-8 {{ $class ?? '' }} w-full relative overflow-hidden mt-auto">
      <figure class="{{ $hide_gradient ?? '' }} pointer-events-none absolute top-[-17%] right-[-64%] size-[550px] rotate-[-30deg] bg-top-right select-none max-[376px]:right-[-83%] md:top-[-25%] md:right-[-30%] lg:right-[-19%] xl:top-[-32%] xl:right-[-9%]">
        <img class="size-full object-cover object-top" src="{{ asset('images/ns-img-493.png') }}" alt="Decorative gradient" />
      </figure>
      <figure class="{{ $hide_gradient ?? '' }} pointer-events-none absolute bottom-[-33%] left-[-83%] size-[728px] select-none min-[2559px]:!left-[-16%] md:bottom-[-60%] md:left-[-52%] md:size-[870px] lg:left-[-38%] xl:bottom-[-77%] xl:left-[-30%] 2xl:left-[-22%]">
        <img class="size-full object-bottom" src="{{ asset('images/ns-img-494.png') }}" alt="Decorative gradient" />
      </figure>
      <div class="main-container px-5 relative z-10">
        <div class="grid grid-cols-12 justify-between gap-x-0 gap-y-12 sm:gap-y-16 pt-16 pb-12 xl:pt-[90px]">
          <div class="col-span-12 xl:col-span-4">
            <div class="max-w-[306px]">
              <figure>
                <img src="{{ asset('images/shared/expert-dev-logo.png') }}" alt="Expert Dev Logo" />
              </figure>
              <p class="text-accent/60 text-tagline-1 mt-4 mb-7 font-normal">
                Building scalable, high-performance web and mobile applications for modern businesses.
              </p>
            </div>
          </div>
          <div class="col-span-12 grid grid-cols-12 gap-x-0 gap-y-8 xl:col-span-8">
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
              <div class="space-y-6 sm:space-y-8">
                <p class="text-heading-6 sm:text-heading-6 text-tagline-1 text-primary-50 font-normal">Company</p>
                <ul class="space-y-3 sm:space-y-5">
                  <li><a href="{{ url('about') }}" class="footer-link">About Us</a></li>
                  <li><a href="{{ url('services') }}" class="footer-link">Services</a></li>
                  <li><a href="{{ url('case-study') }}" class="footer-link">Portfolio</a></li>
                  <li><a href="{{ url('contact') }}" class="footer-link">Contact us</a></li>
                </ul>
              </div>
            </div>
            <div class="hidden md:block md:col-span-4">
              <!-- Empty column for spacing -->
            </div>
            <div class="col-span-12 sm:col-span-6 md:col-span-4">
              <div class="space-y-6 sm:space-y-8">
                <p class="text-heading-6 sm:text-heading-6 text-tagline-1 text-primary-50 font-normal">Legal</p>
                <ul class="space-y-3 sm:space-y-5">
                  <li><a href="{{ url('terms-conditions') }}" class="footer-link">Terms & Conditions</a></li>
                  <li><a href="{{ url('privacy-policy') }}" class="footer-link">Privacy Policy</a></li>
                  <li><a href="{{ url('refund-policy') }}" class="footer-link">Refund Policy</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="relative pt-[26px] pb-[100px] text-center">
          <div class="footer-divider bg-accent/10 dark:bg-stroke-4/10 absolute top-0 right-0 left-0 mx-auto h-px w-0 origin-center"></div>
          <p class="text-tagline-1 text-primary-50 font-normal">
            Copyright &copy; {{ date('Y') }} Expert Dev LLC – Custom Software Engineering
          </p>
        </div>
      </div>

      <div class="{{ $hide_theme_toggle ?? '' }} relative z-20">
        <button id="theme-toggle" data-default-theme="{{ $default_theme ?? 'dark' }}" aria-label="Theme toggle button" class="size-12 bg-background-8 !z-[9999] dark:bg-white rounded-l-2xl cursor-pointer flex items-center justify-center fixed right-0 bottom-5 shadow-lg border border-stroke-1 dark:border-white/10">
          <span id="dark-theme-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 stroke-black"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" /></svg>
          </span>
          <span id="light-theme-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-white"><path stroke-linecap="round" stroke-linejoin="round" d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" /></svg>
          </span>
        </button>
      </div>
    </footer>
    
</div> <!-- End of App Wrapper -->

<!-- Scripts -->
<script src="{{ asset('vendor/swiper.min.js') }}"></script>
<script src="{{ asset('vendor/leaflet.min.js') }}"></script>
<script src="{{ asset('vendor/vanilla-infinite-marquee.min.js') }}"></script>
<script src="{{ asset('vendor/split-text.min.js') }}"></script>
<script src="{{ asset('vendor/gsap.min.js') }}"></script>
<script src="{{ asset('vendor/scroll-trigger.min.js') }}"></script>
<script src="{{ asset('vendor/draw-svg.min.js') }}"></script>
<script src="{{ asset('vendor/motionpathplugin.min.js') }}"></script>
<script src="{{ asset('vendor/lenis.min.js') }}"></script>
<script src="{{ asset('vendor/springer.min.js') }}"></script>
<script src="{{ asset('vendor/number-counter.js') }}"></script>
<script src="{{ asset('vendor/stack-card.min.js') }}"></script>
<script src="{{ asset('assets/main.js') }}"></script>
</body>
</html>