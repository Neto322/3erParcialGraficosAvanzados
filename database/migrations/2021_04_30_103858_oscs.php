<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Oscs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oscs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_organizacion')->foreign('id_organizacion')->references('id')->on('oscs');
            $table->string('nombre',128);
            $table->string('oficina',64)->nullable();
            $table->string('celular',64)->nullable();
            $table->string('correo',64)->nullable();
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
        Schema::dropIfExists('oscs');
    }
}
