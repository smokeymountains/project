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
        Schema::create('apeals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('catId');
            $table->string('Title');
            $table->string('slug');
            $table->string('meta');
            $table->longText('descr');
            $table->tinyInteger('status')->default('0')->comment('0=Unfulfilled,1=Fulfiled');
            $table->tinyInteger('visible')->default('0')->comment('0=hidden,1=visible');
            $table->foreign('catId')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apeals');
    }
};
