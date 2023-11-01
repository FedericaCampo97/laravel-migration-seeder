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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("agency");
            $table->string("starts");
            $table->string("arrivals");
            $table->dateTime('hour_start');
            $table->dateTime('hour_arrivals');
            $table->integer('code_train');
            $table->integer('number_ carriages');
            $table->boolean("in_time");
            $table->boolean("deleted");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
