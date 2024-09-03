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
        Schema::create('notifications', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->string('subject', 255); // Added length constraint
            $table->text('message'); // No changes needed
            $table->text('feedback')->nullable(); // Made nullable in case feedback is optional
            $table->morphs('sender'); // Polymorphic relation for sender
            $table->morphs('user'); // Polymorphic relation for user
            $table->boolean('is_read')->default(false); // Default value for read status
            $table->timestamps();
            $table->softDeletes();
            // Timestamps for created_at and updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
