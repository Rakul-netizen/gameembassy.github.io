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
        Schema::create('row1c18', function (Blueprint $table) {
            $table->id();
            $table->string('title18');
            $table->string('subtitle18');
            $table->string('youtubelinks18');
            $table->text('description18')->nullable();
            $table->text('content18')->nullable();
            $table->string('image18')->nullable();
            $table->string('video18')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c18');
    }
};
