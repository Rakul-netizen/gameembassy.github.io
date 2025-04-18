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
        Schema::create('row1c13', function (Blueprint $table) {
            $table->id();
            $table->string('title13');
            $table->string('subtitle13');
            $table->string('youtubelinks13');
            $table->text('description13')->nullable();
            $table->text('content13')->nullable();
            $table->string('image13')->nullable();
            $table->string('video13')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('row1c13');
    }
};
