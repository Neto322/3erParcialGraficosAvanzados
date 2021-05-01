<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('organizations', function (Blueprint $table) {
            $table->string('nombre',255);
            $table->string('objeto_social',128);
            $table->string('presidente',128);
            $table->string('represetante_legal',128);
            $table->string('director',128);
            $table->string('domicilio',255);
            $table->string('telefono',64);
            $table->string('email',64);
            $table->string('sitio_web',64);
            $table->string('facebook',64);
            $table->string('instagram',64);
            $table->string('twitter',64);
            $table->integer('activo');
            $table->string('comentario_baja',255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('organizations', function (Blueprint $table) {
            $table->string('nombre',255);
            $table->string('objeto_social',128)->nullable();
            $table->string('presidente',128)->nullable();
            $table->string('represetante_legal',128)->nullable();
            $table->string('director',128)->nullable();
            $table->string('domicilio',255)->nullable();
            $table->string('telefono',64)->nullable();
            $table->string('email',64)->nullable();
            $table->string('sitio_web',64)->nullable();
            $table->string('facebook',64)->nullable();
            $table->string('instagram',64)->nullable();
            $table->string('twitter',64)->nullable();
            $table->int('activo',64)->default(1);
            $table->string('comentario_baja',255);
        });
    }
}
