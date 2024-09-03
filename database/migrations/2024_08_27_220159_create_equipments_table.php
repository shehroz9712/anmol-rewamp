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
    {Schema::create('equipments', function (Blueprint $table) {
        $table->id(); // Replaced integer with id() for the primary key
        $table->string('name', 100); // Added length constraint
        $table->decimal('price', 10, 2); // Added precision and scale for decimal
        $table->string('pieces', 20); // Added length constraint
        $table->integer('guest'); // No changes needed
        $table->integer('cap'); // No changes needed
        $table->boolean('status')->default(true); // No changes needed
        $table->softDeletes(); // Enable soft deletes
        $table->timestamps();
    });
    
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipments');
    }
};
