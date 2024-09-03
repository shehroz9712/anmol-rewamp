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
        Schema::create('prices', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedBigInteger('category_id'); // Foreign key to categories table
            $table->unsignedBigInteger('equipment_id'); // Foreign key to equipment table
            $table->string('pick', 20); // Length constraint for the pick field
            $table->decimal('price', 10, 2); // Changed to decimal for accurate monetary values
            $table->boolean('status')->default(true); // Default value for status
            $table->softDeletes();
            $table->timestamps(); // Timestamps for created_at and updated_at
        
            // Adding foreign key constraints
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('equipment_id')->references('id')->on('equipments')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
