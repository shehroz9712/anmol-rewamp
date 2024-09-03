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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 50); // Increased length for flexibility
            $table->string('last_name', 50);  // Increased length for flexibility
            $table->string('email', 100)->unique(); // Added length constraint
            $table->string('image', 255)->nullable(); // Added length constraint
            $table->string('phone', 20); // Added length constraint
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password', 255); // Added length constraint for hashed password
            $table->boolean('status')->default(false);
            $table->rememberToken();
            $table->softDeletes(); // Enable soft deletes
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
