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
        Schema::create('row1c4', function (Blueprint $table) {
            $table->id();
            $table->string('title4');
            $table->string('subtitle4');
            $table->string('youtubelinks4');
            $table->text('description4')->nullable();
            $table->text('content4')->nullable();
            $table->string('image4')->nullable();
            $table->string('video4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c4');
    }
};
