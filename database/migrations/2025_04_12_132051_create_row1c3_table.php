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
        Schema::create('row1c3', function (Blueprint $table) {
            $table->id();
            $table->string('title3');
            $table->string('subtitle3');
            $table->string('youtubelinks3');
            $table->text('description3')->nullable();
            $table->text('content3')->nullable();
            $table->string('image3')->nullable();
            $table->string('video3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c3');
    }
};
