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
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('content');
            $table->string('price');
            $table->boolean('published')->default(1);
            $table->boolean('special')->default(0);
            $table->string('image');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**

     */
    public function down(): void
    {
        Schema::dropIfExists('beverages');
    }
};
