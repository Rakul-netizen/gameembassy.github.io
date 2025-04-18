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
        Schema::create('row1c17', function (Blueprint $table) {
            $table->id();
            $table->string('title17');
            $table->string('subtitle17');
            $table->string('youtubelinks17');
            $table->text('description17')->nullable();
            $table->text('content17')->nullable();
            $table->string('image17')->nullable();
            $table->string('video17')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c17');
    }
};
