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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title_en')->nullable();
            $table->string('title_tr')->nullable();
            $table->string('title_ru')->nullable();
            $table->text('text_en')->nullable();
            $table->text('text_tr')->nullable();
            $table->text('text_ru')->nullable();
            $table->string('img')->nullable();
            $table->string('doc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
