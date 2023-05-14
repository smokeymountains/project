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
        Schema::create('_sosettings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('setId');
            $table->string('name');
            $table->foreign('setId')->references('id')->on('settings')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_sosettings');
    }
};
