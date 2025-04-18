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
        Schema::create('row1c19', function (Blueprint $table) {
            $table->id();
            $table->string('title19');
            $table->string('subtitle19');
            $table->string('youtubelinks19');
            $table->text('description19')->nullable();
            $table->text('content19')->nullable();
            $table->string('image19')->nullable();
            $table->string('video19')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c19');
    }
};
