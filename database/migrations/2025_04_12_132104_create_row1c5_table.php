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
        Schema::create('row1c5', function (Blueprint $table) {
            $table->id();
            $table->string('title5');
            $table->string('subtitle5');
            $table->string('youtubelinks5');
            $table->text('description5')->nullable();
            $table->text('content5')->nullable();
            $table->string('image5')->nullable();
            $table->string('video5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c5');
    }
};
