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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable(); // Increased length to accommodate longer titles
            $table->string('currency', 10)->default('USD'); // Adjusted default and added length constraint
            $table->string('email', 100)->nullable(); // Added length constraint
            $table->string('phone', 20)->nullable(); // Added length constraint
            $table->string('favicon', 100)->nullable(); // Added length constraint
            $table->string('address', 100)->nullable(); // Added length constraint
            $table->string('website', 100)->nullable(); // Added length constraint
            $table->string('logo', 100)->nullable(); // Added length constraint
            $table->string('dark_logo', 100)->nullable(); // Added length constraint
            $table->string('facebook', 100)->nullable(); // Added length constraint
            $table->string('instagram', 100)->nullable(); // Added length constraint
            $table->string('linkedin', 100)->nullable(); // Added length constraint
            $table->string('twitter', 100)->nullable(); // Added length constraint
            $table->string('tax', 10)->nullable(); // Added length constraint for potential numeric or percentage value
            $table->text('footer_scripts')->nullable();
            $table->text('header_scripts')->nullable();
            $table->text('footer_sentence')->nullable();
            $table->text('body_scripts')->nullable();
            $table->string('stripe_key', 100)->nullable(); // Corrected spelling and changed to string with length constraint
            $table->string('secret_key', 100)->nullable(); // Changed to string with length constraint
            $table->string('copyright', 100)->nullable(); // Changed to string with length constraint
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
