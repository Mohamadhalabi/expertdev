@extends('layouts.app')

@section('content')
<section class="py-[100px]" style="padding-top: 160px;">
  <div class="main-container">
    <div class="max-w-[600px] mx-auto text-center space-y-6 p-[42px] bg-white dark:bg-background-8 rounded-[20px] border border-stroke-1 dark:border-white/10 shadow-lg">
      <div class="size-16 bg-primary-500 rounded-full flex items-center justify-center mx-auto">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="20" viewBox="0 0 10 7" fill="none" class="fill-white">
          <path d="M4.31661 6.75605L9.74905 1.42144C10.0836 1.0959 10.0836 0.569702 9.74905 0.244158C9.41446 -0.081386 8.87363 -0.081386 8.53904 0.244158L3.7116 4.99012L1.46096 2.78807C1.12636 2.46253 0.585538 2.46253 0.250945 2.78807C-0.0836483 3.11362 -0.0836483 3.63982 0.250945 3.96536L3.1066 6.75605C3.27347 6.91841 3.49253 7 3.7116 7C3.93067 7 4.14974 6.91841 4.31661 6.75605Z" />
        </svg>
      </div>
      <h1 class="text-heading-3 text-secondary dark:text-accent">Payment successful</h1>
      <p class="text-secondary/60 dark:text-accent/60">Thank you! We've received your payment and our team will reach out shortly.</p>
      @if($payment)
        <div class="text-sm text-secondary/60 dark:text-accent/60 bg-background-1 dark:bg-background-6 rounded-xl py-4 px-6">
          Reference: <span class="font-medium text-secondary dark:text-accent">{{ $payment->reference }}</span>
        </div>
      @endif
      <a href="{{ url('/') }}" class="btn btn-primary btn-md before:content-none">Back to Home</a>
    </div>
  </div>
</section>
@endsection