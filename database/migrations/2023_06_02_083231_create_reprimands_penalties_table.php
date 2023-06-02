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
        Schema::create('reprimands_penalties', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('reprimands_id')->unsigned();
            $table->bigInteger('penalty_id')->unsigned();
            $table->timestamps();

            $table->foreign('reprimands_id')->references('id')->on('reprimands')->onDelete('cascade');
            $table->foreign('penalty_id')->references('id')->on('penalties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reprimands_penalties');
    }
};
