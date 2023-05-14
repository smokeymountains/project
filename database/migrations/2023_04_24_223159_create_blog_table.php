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
        Schema::create('blog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('catId');
            $table->foreign('catId')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Title');
            $table->string('Author');
            $table->string('metaDescr')->nullable();
            $table->string('Descr');
            $table->string('postdate');
            $table->string('posttime');
            $table->string('keyword');
            $table->tinyInteger('trending')->drfault('0')->comment('0=hidden,1=visible');
            $table->string('relatedTo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
