<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosFinalizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagamentosFinalizados', function (Blueprint $table) {
            $table->unsignedInteger('usuario_idusuario');
            $table->unsignedInteger('festa_idfesta');

            $table->foreign('usuario_idusuario')->references('idusuario')->on('usuario');
            $table->foreign('festa_idfesta')->references('idfesta')->on('festa');

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
        Schema::dropIfExists('pagamentosFinalizados');
    }
}
