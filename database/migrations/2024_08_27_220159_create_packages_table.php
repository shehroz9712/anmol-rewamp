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
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->string('name', 64); // Length constraint for package name
            $table->string('currency', 3); // Length constraint for currency code (e.g., USD)
            $table->decimal('price', 10, 2); // Decimal for accurate pricing
            $table->unsignedBigInteger('category_id'); // Foreign key to categories table
            $table->boolean('status')->default(false); // Default value for status
            $table->softDeletes();
            $table->timestamps(); // Timestamps for created_at and updated_at

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Foreign key constraint with cascade delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
