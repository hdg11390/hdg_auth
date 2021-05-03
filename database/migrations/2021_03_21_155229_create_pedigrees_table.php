<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedigreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedigrees', function (Blueprint $table) {
            $table->id();
            $table->string('regName');
            $table->integer('mped_id');
            $table->integer('fped_id');
            $table->date('birthday');
            $table->string('colour');
            $table->string('sex');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedigrees');
    }
}
