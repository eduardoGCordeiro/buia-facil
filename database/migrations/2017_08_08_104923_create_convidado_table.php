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
            $table->unsignedInteger('usuario_idusuario');
            $table->boolean('temPermissaoParaConvite');
            $table->unsignedInteger('festa_idfesta');
            $table->timestamps();

            $table->foreign('usuario_idusuario')->references('idusuario')->on('usuario');
            $table->foreign('festa_idfesta')->references('idfesta')->on('festa');
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
