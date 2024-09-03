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
        Schema::create('package_includes', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->unsignedBigInteger('package_id'); // Changed to unsignedBigInteger for consistency
            $table->morphs('sharable'); // Polymorphic relation for sharable items
            $table->integer('qty')->nullable(); // Quantity, made nullable to handle optional values
            $table->softDeletes();
            $table->timestamps(); // Timestamps for created_at and updated_at
            
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade'); // Foreign key constraint
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_includes');
    }
};
