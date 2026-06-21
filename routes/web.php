<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

// Home Page
Route::get('/', function () {
    return view('index', [
        'seo_title' => 'Expert Dev | Custom Web & Mobile Application Development',
        'seo_description' => 'Expert Dev specializes in high-performance custom web and mobile application development. We build scalable software for startups and enterprises.',
        'seo_keywords' => 'custom software development, web development, mobile app development, Laravel, Flutter, expert dev'
    ]);
});

// About Page
Route::get('/about', function () {
    return view('about', [
        'seo_title' => 'About Us | Expert Dev Engineering Team',
        'seo_description' => 'Learn about Expert Dev, our mission, and our commitment to building clean, scalable, and secure software solutions for businesses worldwide.',
        'seo_keywords' => 'about expert dev, software engineers, web development team, technology partner'
    ]);
});

// Services Page
Route::get('/services', function () {
    return view('services', [
        'seo_title' => 'Our Services | Web, Mobile & API Development',
        'seo_description' => 'Explore Expert Dev’s core services including custom web applications, native mobile apps, UI/UX design, and robust backend architecture.',
        'seo_keywords' => 'web app development services, mobile app developers, API design, UI/UX design, custom software'
    ]);
});

// Case Studies / Portfolio Page
Route::get('/case-study', function () {
    return view('case-study', [
        'seo_title' => 'Case Studies | Expert Dev Software Portfolio',
        'seo_description' => 'View our portfolio of successful web and mobile applications. See how we solve complex technical challenges for our clients.',
        'seo_keywords' => 'software portfolio, case studies, app development examples, web development projects'
    ]);
});

// Contact Page
Route::get('/contact', function () {
    return view('contact', [
        'seo_title' => 'Contact Us | Start Your Project with Expert Dev',
        'seo_description' => 'Get in touch with Expert Dev to discuss your next web or mobile application project. Schedule a free technical consultation today.',
        'seo_keywords' => 'contact expert dev, hire developers, start software project, technical consultation'
    ]);
});

// terms conditions Page
Route::get('/terms-conditions', function () {
    return view('legal.terms');
})->name('terms');

// Refund Policy Page
Route::get('/refund-policy', function () {
    return view('legal.refund');
})->name('refund');

// Privacy Policy Page

Route::get('/privacy-policy', function () {
    return view('legal.privacy');
})->name('privacy');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

// Fixed-plan checkout
Route::get('/checkout/{plan}', [PaymentController::class, 'checkout'])->name('checkout');

// Custom payment
Route::get('/pay', [PaymentController::class, 'customForm'])->name('payment.custom');
Route::post('/pay', [PaymentController::class, 'customCheckout'])->name('payment.custom.process');

// Result pages
Route::get('/payment/success', [PaymentController::class, 'success'])->name('payment.success');
Route::get('/payment/cancel', [PaymentController::class, 'cancel'])->name('payment.cancel');

// Webhook (must be excluded from CSRF — see step 7)
Route::post('/stripe/webhook', [PaymentController::class, 'webhook'])->name('stripe.webhook');

// Client opens this to pay (no login needed — the link IS the access)
Route::get('/pay/{reference}', [PaymentController::class, 'payShow'])->name('pay.show');

// YOUR private link generator — protected by password
Route::middleware('admin.gate')->group(function () {
    Route::get('/admin/create-link', [PaymentController::class, 'createLinkForm'])->name('admin.create-link');
    Route::post('/admin/create-link', [PaymentController::class, 'createPaymentLink'])->name('admin.create-link.store');
});