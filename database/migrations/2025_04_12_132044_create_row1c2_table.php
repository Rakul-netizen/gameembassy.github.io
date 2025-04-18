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
        Schema::create('row1c2', function (Blueprint $table) {
            $table->id();
            $table->string('title2');
            $table->string('subtitle2');
            $table->string('youtubelinks2');
            $table->text('description2')->nullable();
            $table->text('content2')->nullable();
            $table->string('image2')->nullable();
            $table->string('video2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c2');
    }
};
