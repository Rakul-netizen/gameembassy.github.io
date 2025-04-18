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
        Schema::create('row1c8', function (Blueprint $table) {
            $table->id();
            $table->string('title8');
            $table->string('subtitle8');
            $table->string('youtubelinks8');
            $table->text('description8')->nullable();
            $table->text('content8')->nullable();
            $table->string('image8')->nullable();
            $table->string('video8')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c8');
    }
};
