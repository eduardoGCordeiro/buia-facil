<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('festa', function (Blueprint $table) {
            $table->increments('idfesta');
            //Foi trocado a chave estrangeira de usuario_idusuario para idusuario para não ficar redundante
            $table->unsignedInteger('idusuario');
            $table->decimal('valorIngresso',10.2);
            $table->string('endereco');
            $table->string('cidade');
            $table->string('pais');
            $table->dateTime('data');
            //Trocado o nome de ehParticular só para particular
            $table->boolean('particular');

            $table->primary('idfesta');

            $table->foreign('idusuario')->references('idusuario')->on('usuario');

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
        Schema::dropIfExists('festa');
    }
}
