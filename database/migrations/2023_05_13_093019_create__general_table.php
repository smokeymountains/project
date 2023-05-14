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
        Schema::create('_general', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone');
            $table->string('email');
            $table->string('insta');
            $table->string('face');
            $table->string('twitter');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_general');
    }
};
