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
        Schema::create('row1c11', function (Blueprint $table) {
            $table->id();
            $table->string('title11');
            $table->string('subtitle11');
            $table->string('youtubelinks11');
            $table->text('description11')->nullable();
            $table->text('content11')->nullable();
            $table->string('image11')->nullable();
            $table->string('video11')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c11');
    }
};
