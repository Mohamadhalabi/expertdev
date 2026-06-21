<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('reference')->unique();
            $table->string('customer_name')->nullable();
            $table->string('customer_email');
            $table->string('plan_name');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('amount'); // cents
            $table->string('currency', 3)->default('usd');
            $table->string('status')->default('pending'); // pending, paid, failed
            $table->string('stripe_session_id')->nullable();
            $table->string('stripe_payment_intent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
