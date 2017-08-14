<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoLoginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicoLogin', function (Blueprint $table) {
            $table->increments('idhistoricoLogin');
            $table->dateTime('dateTimeLogin');
            //Foi trocado a chave estrangeira de usuario_idusuario para idusuario para não ficar redundante
            $table->unsignedInteger('usuario_idusuario');

            $table->foreign('usuario_idusuario')->references('idusuario')->on('usuario');

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
        Schema::dropIfExists('historicoLogin');
    }
}
