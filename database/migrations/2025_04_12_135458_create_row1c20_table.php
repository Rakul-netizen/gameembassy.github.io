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
        Schema::create('row1c20', function (Blueprint $table) {
            $table->id();
            $table->string('title20');
            $table->string('subtitle20');
            $table->string('youtubelinks20');
            $table->text('description20')->nullable();
            $table->text('content20')->nullable();
            $table->string('image20')->nullable();
            $table->string('video20')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c20');
    }
};
