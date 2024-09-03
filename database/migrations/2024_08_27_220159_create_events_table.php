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
        Schema::create('events', function (Blueprint $table) {
            $table->id(); // Replaced bigIncrements with id() for consistency
            $table->string('name', 255); // Added length constraint
            $table->integer('guests'); // Changed to integer for numeric guest count
            $table->string('type', 100); // Added length constraint
            $table->date('date'); // No changes needed
            $table->morphs('user');
            $table->enum('status', ['Prospect', 'Definite', 'Lost', 'Tentative', 'Close', 'Waitlist'])->nullable(); // Changed to enum for fixed statuses
            $table->string('occasion', 100); // Added length constraint
            $table->string('start_time', 5); // Added length constraint for time format (HH:MM)
            $table->string('end_time', 5); // Added length constraint for time format (HH:MM)
            $table->softDeletes(); // Enable soft deletes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
