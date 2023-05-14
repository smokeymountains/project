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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('comment');
            $table->unsignedBigInteger('cId');
            $table->unsignedBigInteger('bId');
            $table->unsignedBigInteger('ApId');
            $table->unsignedBigInteger('EId');
            $table->foreign('cId')->references('id')->on('causes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('bId')->references('id')->on('blog')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('ApId')->references('id')->on('apeals')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('EId')->references('id')->on('events')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
