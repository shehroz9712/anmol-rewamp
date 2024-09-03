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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->string('name', 64); // Length constraint for sub-category name
            $table->boolean('status')->default(false); // Default value for status
            $table->unsignedBigInteger('category_id'); // Foreign key to categories table
            $table->tinyInteger('is_addon')->default(0); // Default value for is_addon
            $table->enum('term', ['main course', 'appetizer', 'dessert'])->default('main course'); // Enum values and default
            $table->decimal('single', 6, 2); // Decimal for accurate monetary values
            $table->decimal('double', 6, 2); // Decimal for accurate monetary values
            $table->decimal('trio', 6, 2); // Decimal for accurate monetary values
            $table->timestamps(); // Timestamps for created_at and updated_at
            $table->softDeletes();
            
            // Foreign key constraint
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
