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
        Schema::create('row1c7', function (Blueprint $table) {
            $table->id();
            $table->string('title7');
            $table->string('subtitle7');
            $table->string('youtubelinks7');
            $table->text('description7')->nullable();
            $table->text('content7')->nullable();
            $table->string('image7')->nullable();
            $table->string('video7')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c7');
    }
};
