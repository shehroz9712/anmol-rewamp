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
        Schema::create('menu_request', function (Blueprint $table) {
            $table->id(); // Replaced integer with id() for the primary key
            $table->foreignId('old_item_id')->constrained('items')->onDelete('cascade'); // Foreign key with constraints
            $table->foreignId('new_item_id')->constrained('items')->onDelete('cascade'); // Foreign key with constraints
            $table->foreignId('event_id')->constrained('events')->onDelete('cascade'); // Foreign key with constraints
            $table->tinyInteger('status')->default(0); // Default value added
            $table->softDeletes();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_request');
    }
};
