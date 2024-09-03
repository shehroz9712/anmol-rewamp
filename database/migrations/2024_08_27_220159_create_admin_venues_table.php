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
        Schema::create('venues', function (Blueprint $table) {
            $table->id(); // Replaced bigIncrements with id() for simplicity
            $table->string('name', 100); // Added length constraint and removed duplicate field
            $table->string('address', 255); // Added length constraint for addresses
            $table->string('country', 100); // Added length constraint
            $table->string('state', 100); // Added length constraint
            $table->string('city', 100); // Added length constraint
            $table->string('zipCode', 20); // Added length constraint for postal codes
            $table->string('phone', 20); // Added length constraint for phone numbers
            $table->string('email', 100)->nullable(); // Added length constraint and made nullable
            $table->softDeletes(); // Enable soft deletes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venues');
    }
};
