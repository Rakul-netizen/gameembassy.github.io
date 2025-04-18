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
        Schema::create('row1c9', function (Blueprint $table) {
            $table->id();
            $table->string('title9');
            $table->string('subtitle9');
            $table->string('youtubelinks9');
            $table->text('description9')->nullable();
            $table->text('content9')->nullable();
            $table->string('image9')->nullable();
            $table->string('video9')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c9');
    }
};
