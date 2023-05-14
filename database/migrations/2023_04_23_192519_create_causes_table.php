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
        Schema::create('causes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Title');
            $table->string('MetaDescr');
            $table->string('Description');
            $table->string('slug');
           
            $table->integer('causeGoal');
            $table->integer('availableAmount');
            $table->tinyInteger('status')->default('0')->comment('0=Inprogress,1=Complet');
            $table->tinyInteger('popular')->default('0')->comment('0=Not Popular,1=Popular');
            $table->unsignedbigInteger('catId');

            $table->foreign('catId')
                ->references('id')
                ->on('categories')->onDelete('cascade')->onUpdate('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('causes');
    }
};
