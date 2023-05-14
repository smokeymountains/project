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
        Schema::create('_cosettings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('setId');
            $table->string('Title');
            $table->string('image');
            $table->string('Phone');
            $table->string('Phone2');
            $table->string('Location');
            $table->string('box');
            $table->string('street');
            $table->string('email');
            $table->foreign('setId')->references('id')->on('settings')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_cosettings');
    }
};
