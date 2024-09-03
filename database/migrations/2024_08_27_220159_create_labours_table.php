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
        Schema::create('labours', function (Blueprint $table) {
            $table->id(); // Replaced integer with id() for the primary key
            $table->string('name', 100); // Added length constraint
            $table->string('designation', 100); // Added length constraint
            $table->integer('with_item')->default(0); // Default value added
            $table->integer('guest')->default(0); // Default value added
            $table->integer('cap')->default(0); // Default value added
            $table->decimal('price', 10, 2); // Added precision and scale for decimal
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
        Schema::dropIfExists('labours');
    }
};
