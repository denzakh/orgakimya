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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('firm')->nullable;
            $table->string('site')->nullable;
            $table->string('email1')->nullable;
            $table->string('email2')->nullable;
            $table->string('address1')->nullable;
            $table->string('address2')->nullable;
            $table->string('coord1')->nullable;
            $table->string('coord2')->nullable;
            $table->string('gmaplink1')->nullable;
            $table->string('gmaplink2')->nullable;
            $table->string('city')->nullable;
            $table->string('district')->nullable;
            $table->string('phone1')->nullable;
            $table->string('phone2')->nullable;
            $table->string('fax')->nullable;
            $table->string('linkedin1')->nullable;
            $table->string('linkedin2')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
