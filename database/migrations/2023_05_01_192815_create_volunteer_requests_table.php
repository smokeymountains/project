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
        Schema::create('volunteer_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('catId');
            $table->text('name');
            $table->text('email');
            $table->text('message');
            $table->integer('contact')->nullable();
            $table->foreign('catId')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer_requests');
    }
};
