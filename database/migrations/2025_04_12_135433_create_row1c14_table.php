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
        Schema::create('row1c14', function (Blueprint $table) {
            $table->id();
            $table->string('title14');
            $table->string('subtitle14');
            $table->string('youtubelinks14');
            $table->text('description14')->nullable();
            $table->text('content14')->nullable();
            $table->string('image14')->nullable();
            $table->string('video14')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c14');
    }
};
