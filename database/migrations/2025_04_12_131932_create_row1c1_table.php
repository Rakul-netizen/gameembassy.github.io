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
        Schema::create('row1c1', function (Blueprint $table) {
            $table->id();
            $table->string('title1');
            $table->string('subtitle1');
            $table->string('youtubelinks1');
            $table->text('description1')->nullable();
            $table->text('content1')->nullable();
            $table->string('image1')->nullable();
            $table->string('video1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c1');
    }
};
