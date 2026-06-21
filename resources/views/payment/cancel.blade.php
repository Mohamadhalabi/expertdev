@extends('layouts.app')

@section('content')
<section class="py-[100px]" style="padding-top: 160px;">
  <div class="main-container">
    <div class="max-w-[600px] mx-auto text-center space-y-6 p-[42px] bg-white dark:bg-background-8 rounded-[20px] border border-stroke-1 dark:border-white/10 shadow-lg">
      <h1 class="text-heading-3 text-secondary dark:text-accent">Payment cancelled</h1>
      <p class="text-secondary/60 dark:text-accent/60">No charge was made. You can try again whenever you're ready.</p>
      <a href="{{ route('payment.custom') }}" class="btn btn-primary btn-md before:content-none">Try Again</a>
    </div>
  </div>
</section>
@endsection