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
        Schema::create('services', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary key
            $table->time('appetizer_start_time');
            $table->time('appetizer_end_time');
            $table->time('main_course_start_time');
            $table->time('main_course_end_time');
            $table->time('dessert_start_time');
            $table->time('dessert_end_time');
            $table->time('butler_style_start_time');
            $table->time('butler_style_end_time');
            $table->time('butler_style_start_time_1')->nullable(); // Made nullable to handle optional values
            $table->time('butler_style_end_time_1')->nullable(); // Made nullable to handle optional values
            $table->softDeletes();
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
