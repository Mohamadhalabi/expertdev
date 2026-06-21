@extends('layouts.app')

@section('content')
<section class="py-[100px]" style="padding-top: 160px;">
  <div class="main-container">
    <div class="max-w-[650px] mx-auto text-center space-y-5 mb-12">
      <span class="badge badge-cyan">Admin</span>
      <h1 class="text-heading-3 md:text-heading-2 text-secondary dark:text-accent">Create a payment link</h1>
      <p class="text-secondary/60 dark:text-accent/60">Enter the agreed details. You'll get a link to send your client.</p>
    </div>

    <div class="p-6 lg:p-[42px] bg-white dark:bg-background-8 rounded-[20px] max-w-[650px] mx-auto border border-stroke-1 dark:border-white/10 shadow-lg">

      @if (session('payment_link'))
        <div class="mb-8 p-5 rounded-xl bg-green-50 border border-green-200">
          <p class="text-sm font-medium text-green-800 mb-2">Link created — send this to your client:</p>
          <div class="flex items-center gap-2">
            <input type="text" readonly value="{{ session('payment_link') }}" id="generatedLink"
              class="flex-1 rounded-full bg-white border border-green-300 px-4 py-2 text-sm text-secondary" />
            <button type="button" onclick="navigator.clipboard.writeText(document.getElementById('generatedLink').value); this.textContent='Copied!'"
              class="btn btn-primary btn-sm before:content-none whitespace-nowrap">Copy</button>
          </div>
        </div>
      @endif

      @if ($errors->any())
        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-700 text-sm">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.create-link.store') }}" method="post" class="space-y-6">
        @csrf

        <fieldset class="w-full flex flex-col gap-2">
          <label for="customer_name" class="text-tagline-1 text-secondary font-medium dark:text-accent">Client Name (optional)</label>
          <input type="text" name="customer_name" id="customer_name" value="{{ old('customer_name') }}"
            placeholder="Client's name"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500" />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2">
          <label for="customer_email" class="text-tagline-1 text-secondary font-medium dark:text-accent">Client Email</label>
          <input type="email" name="customer_email" id="customer_email" required value="{{ old('customer_email') }}"
            placeholder="client@example.com"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500" />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2">
          <label for="amount" class="text-tagline-1 text-secondary font-medium dark:text-accent">Amount (USD)</label>
          <input type="number" name="amount" id="amount" required min="5" step="0.01" value="{{ old('amount') }}"
            placeholder="e.g. 1500.00"
            class="rounded-full text-secondary dark:text-accent placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 focus-visible:outline focus-visible:outline-primary-500" />
        </fieldset>

        <fieldset class="w-full flex flex-col gap-2">
          <label for="description" class="text-tagline-1 text-secondary font-medium dark:text-accent">What is this for?</label>
          <textarea name="description" id="description" required
            placeholder="e.g. E-commerce backend — milestone 1"
            class="rounded-xl placeholder:text-secondary/50 dark:placeholder:text-accent/60 bg-transparent dark:bg-background-6 border border-stroke-3 dark:border-stroke-7 w-full px-[18px] py-3 min-h-[100px] resize-none focus-visible:outline focus-visible:outline-primary-500 text-secondary dark:text-accent">{{ old('description') }}</textarea>
        </fieldset>

        <button type="submit" class="btn btn-secondary dark:btn-accent hover:btn-primary btn-md w-full before:content-none first-letter:uppercase">
          Generate Link
        </button>
      </form>
    </div>
  </div>
</section>
@endsection