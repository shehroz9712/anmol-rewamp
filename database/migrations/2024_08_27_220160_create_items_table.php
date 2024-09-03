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
        Schema::create('items', function (Blueprint $table) {
            $table->id(); // Replaced bigIncrements with id() for consistency
            $table->string('name', 64); // Kept length constraint as provided
            $table->string('image', 50); // Added length constraint for image paths
            $table->integer('price'); // No changes needed; consider using unsigned if prices are non-negative
            $table->foreignId('equipment_id')->constrained('equipments')->onDelete('cascade'); // Foreign key with constraints
            $table->string('unit', 20); // Added length constraint for units
            $table->string('desc', 50); // Added length constraint for description
            $table->text('long_desc'); // Kept text type for longer descriptions
            $table->foreignId('subcategory_id')->constrained('sub_categories')->onDelete('cascade'); // Foreign key with constraints
            $table->boolean('status')->default(false); // No changes needed
            $table->softDeletes();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
