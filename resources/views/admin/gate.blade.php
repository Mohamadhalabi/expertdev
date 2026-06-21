@extends('layouts.app')

@section('content')
<section class="py-[100px]" style="padding-top: 160px;">
  <div class="main-container">
    <div class="max-w-[420px] mx-auto p-[42px] bg-white dark:bg-background-8 rounded-[20px] border border-stroke-1 dark:border-white/10 shadow-lg space-y-6">
      <h1 class="text-heading-4 text-secondary dark:text-accent text-center">Admin Access</h1>
      @if ($errors->any())
        <p class="text-red-600 text-sm text-center">{{ $errors->first() }}</p>
      @endif
      <form method="post" class="space-y-4">
        @csrf
        <input type="password" name="admin_password" required autofocus placeholder="Password"
          class="rounded-full text-secondary dark:text-accent bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500" />
        <button type="submit" class="btn btn-primary btn-md w-full before:content-none">Enter</button>
      </form>
    </div>
  </div>
</section>
@endsection