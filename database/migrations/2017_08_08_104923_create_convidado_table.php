<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('convidado', function (Blueprint $table) {
            //Foi trocado a chave estrangeira de usuario_idusuario para idusuario para não ficar redundante
            $table->unsignedInteger('idusuario');
            $table->boolean('temPermissaoParaConvite');
            //Foi trocado a chave estrangeira de festa_idfesta para idfesta para não ficar redundante
            $table->unsignedInteger('idfesta');
            $table->timestamps();

            $table->foreign('idusuario')->references('idusuario')->on('usuario');
            $table->foreign('idfesta')->references('idfesta')->on('festa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('convidado');
    }
}
