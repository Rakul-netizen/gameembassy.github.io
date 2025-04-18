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
        Schema::create('row1c15', function (Blueprint $table) {
            $table->id();
            $table->string('title15');
            $table->string('subtitle15');
            $table->string('youtubelinks15');
            $table->text('description15')->nullable();
            $table->text('content15')->nullable();
            $table->string('image15')->nullable();
            $table->string('video15')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c15');
    }
};
