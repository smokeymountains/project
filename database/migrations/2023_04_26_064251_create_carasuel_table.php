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
        Schema::create('carasuel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image');
            $table->string('descr');
            $table->tinyInteger('status')->default('0')->comment('0 =hidden,1=visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carasuel');
    }
};
