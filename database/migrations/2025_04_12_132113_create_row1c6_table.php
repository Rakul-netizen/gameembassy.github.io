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
        Schema::create('row1c6', function (Blueprint $table) {
            $table->id();
            $table->string('title6');
            $table->string('subtitle6');
            $table->string('youtubelinks6');
            $table->text('description6')->nullable();
            $table->text('content6')->nullable();
            $table->string('image6')->nullable();
            $table->string('video6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c6');
    }
};
