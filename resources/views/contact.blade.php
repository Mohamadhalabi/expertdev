@extends('layouts.app')

@section('content')
<!-- =========================
Contact
===========================-->
<section class="pt-32 pb-14 sm:pt-36 md:pt-42 md:pb-16 lg:pb-20 xl:pt-[180px] xl:pb-[100px]" aria-label="Contact Information and Form">
  <div class="main-container">
    <div class="space-y-[70px]">
      <!-- heading  -->
      <div class="mx-auto max-w-[680px] space-y-3 text-center">
        <h2 data-ns-animate data-delay="0.2">Let's build your next digital product.</h2>
        <p data-ns-animate data-delay="0.3">
          Whether you need a custom mobile application, a scalable web platform, or dedicated technical consulting, our development team is ready to assist.
        </p>
      </div>

      <div class="flex flex-col items-center justify-center gap-10 lg:flex-row lg:items-start lg:gap-8 xl:gap-[70px]">
        <!-- contact info cards  -->
        <div data-ns-animate data-delay="0.4" class="flex flex-col gap-8 md:flex-row lg:flex-col">
          
          <!-- contact info one  -->
          <div class="card-item bg-secondary dark:bg-background-6 relative w-full overflow-hidden rounded-[20px] p-11 text-center md:max-w-[371px]">
            <figure class="pointer-events-none absolute top-[-206px] left-[-36px] size-[350px] rotate-[62deg] overflow-hidden select-none">
              <img src="{{ asset('images/ns-img-509.png') }}" alt="Decorative gradient overlay" class="size-full object-cover" />
            </figure>
            <div class="space-y-6">
              <figure class="mx-auto size-10 overflow-hidden">
                <img src="{{ asset('images/icons/mail-open.svg') }}" alt="Email icon" class="size-full object-cover" />
              </figure>
              <div class="space-y-2.5">
                <p class="text-heading-6 text-accent">Email Us</p>
                <p class="text-accent/60">
                  <a href="mailto:info@expertdev.net">info@expertdev.net</a>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- contact form  -->
        <div data-ns-animate data-delay="0.3" class="dark:bg-background-6 mx-auto w-full max-w-[847px] rounded-4xl bg-white p-6 md:p-8 lg:p-11">
          <form action="{{ url('contact') }}" method="POST" class="space-y-8">
            @csrf
            <!-- name and company -->
            <div class="flex flex-col items-center justify-between gap-8 md:flex-row">
              <div class="w-full space-y-2 lg:max-w-[364px]">
                <label for="fullname" class="text-tagline-2 text-secondary dark:text-accent block font-medium">Your name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your name" required autocomplete="name" class="dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 dark:bg-background-6 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent h-[48px] w-full rounded-full border px-[18px] py-3 font-normal placeholder:font-normal focus:outline-none xl:h-[41px]" />
              </div>
              <div class="w-full max-w-[364px] space-y-2">
                <label for="company" class="text-tagline-2 text-secondary dark:text-accent block font-medium">Company</label>
                <input type="text" id="company" name="company" placeholder="Enter your company name" class="dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 dark:bg-background-6 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent h-[48px] w-full rounded-full border px-[18px] py-3 font-normal placeholder:font-normal focus:outline-none xl:h-[41px]" />
              </div>
            </div>

            <!-- email  -->
            <div class="space-y-2">
              <label for="email" class="text-tagline-2 text-secondary dark:text-accent block font-medium">Email address</label>
              <input type="email" id="email" name="email" placeholder="Enter your work email" required autocomplete="email" class="dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 dark:bg-background-6 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent h-[48px] w-full rounded-full border px-[18px] py-3 font-normal placeholder:font-normal focus:outline-none xl:h-[41px]" />
            </div>

            <!-- Project Type  -->
            <div class="space-y-2">
              <label for="subject" class="text-tagline-2 text-secondary dark:text-accent block font-medium">Project Type</label>
              <input type="text" id="subject" name="subject" placeholder="e.g. Mobile App, Web Portal, API Integration" required class="dark:focus-visible:border-stroke-4/20 dark:border-stroke-7 dark:bg-background-6 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:border-secondary placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent h-[48px] w-full rounded-full border px-[18px] py-3 font-normal placeholder:font-normal focus:outline-none xl:h-[41px]" />
            </div>

            <!-- message -->
            <div class="space-y-2">
              <label for="message" class="text-tagline-2 text-secondary dark:text-accent block font-medium">Project Details</label>
              <textarea id="message" name="message" rows="7" placeholder="Tell us about your technical requirements..." required class="dark:bg-background-6 dark:border-stroke-7 border-stroke-3 bg-background-1 text-tagline-2 placeholder:text-secondary/60 focus:border-secondary dark:focus-visible:border-stroke-4/20 placeholder:text-tagline-2 dark:placeholder:text-accent/60 dark:text-accent w-full rounded-xl border px-[18px] py-3 font-normal placeholder:font-normal focus:outline-none"></textarea>
            </div>

            <!-- submit button -->
            <button type="submit" class="btn btn-md btn-secondary hover:btn-primary dark:btn-accent w-full first-letter:uppercase before:content-none">
              Submit Project Inquiry
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
Contact Map
===========================-->
<!-- <section class="md:pt-[80px] lg:pt-[100px] pb-[100px] md:pb-[150px] lg:pb-[200px]" aria-label="Location Map">
  <div class="main-container">
    <div data-ns-animate data-delay="0.1" class="rounded-[20px] bg-white dark:bg-background-6 p-2.5">
      <div id="map" class="w-full min-h-[300px] overflow-hidden rounded-2xl lg:min-h-[566px]"></div>
    </div>
  </div>
</section> -->
@endsection