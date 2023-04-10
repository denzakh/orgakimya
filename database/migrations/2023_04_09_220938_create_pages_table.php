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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('slug');
            $table->string('title_en')->nullable;
            $table->string('title_tr')->nullable;
            $table->string('title_ru')->nullable;
            $table->string('promo_en')->nullable;
            $table->string('promo_tr')->nullable;
            $table->string('promo_ru')->nullable;
            $table->string('content_en')->nullable;
            $table->string('content_tr')->nullable;
            $table->string('content_ru')->nullable;
            $table->string('route_en')->nullable;
            $table->string('route_tr')->nullable;
            $table->string('route_ru')->nullable;            
            $table->string('description_en')->nullable;
            $table->string('description_tr')->nullable;
            $table->string('description_ru')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
