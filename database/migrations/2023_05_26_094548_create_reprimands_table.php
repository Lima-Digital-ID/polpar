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
        Schema::create('reprimands', function (Blueprint $table) {
            $table->id();
            $table->longText('image');
            $table->string('name');
            $table->enum('identity', ['sim', 'ktp']);
            $table->bigInteger('identity_number');
            $table->string('phone');
            $table->longText('signature');
            $table->unsignedBigInteger('officer_id');
            $table->timestamps();
            $table->foreign('officer_id')->references('id')->on('officers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reprimands');
    }
};
