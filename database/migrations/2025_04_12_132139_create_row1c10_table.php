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
        Schema::create('row1c10', function (Blueprint $table) {
            $table->id();
            $table->string('title10');
            $table->string('subtitle10');
            $table->string('youtubelinks10');
            $table->text('description10')->nullable();
            $table->text('content10')->nullable();
            $table->string('image10')->nullable();
            $table->string('video10')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c10');
    }
};
