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
        Schema::create('items_labours', function (Blueprint $table) {
            $table->id(); // Replaced integer with id() for the primary key
            $table->foreignId('item_id')->constrained('items')->onDelete('cascade'); // Foreign key with constraints
            $table->foreignId('labour_id')->constrained('labours')->onDelete('cascade'); // Foreign key with constraints
            $table->boolean('status')->default(false); // No changes needed
            $table->timestamps();
        });
        
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items_labours');
    }
};
