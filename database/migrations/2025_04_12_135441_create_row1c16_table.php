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
        Schema::create('row1c16', function (Blueprint $table) {
            $table->id();
            $table->string('title16');
            $table->string('subtitle16');
            $table->string('youtubelinks16');
            $table->text('description16')->nullable();
            $table->text('content16')->nullable();
            $table->string('image16')->nullable();
            $table->string('video16')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c16');
    }
};
