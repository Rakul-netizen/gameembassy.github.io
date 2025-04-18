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
        Schema::create('row1c12', function (Blueprint $table) {
            $table->id();
            $table->string('title12');
            $table->string('subtitle12');
            $table->string('youtubelinks12');
            $table->text('description12')->nullable();
            $table->text('content12')->nullable();
            $table->string('image12')->nullable();
            $table->string('video12')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c12');
    }
};
