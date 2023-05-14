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
        Schema::create('pdfs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->unsignedBigInteger('ApId');
            $table->foreign('ApId')->references('id')->on('apeals')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Descr');
            $table->string('Date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdfs');
    }
};
