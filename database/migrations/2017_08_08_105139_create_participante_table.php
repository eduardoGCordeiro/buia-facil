<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participante', function (Blueprint $table) {
            //Foi trocado a chave estrangeira de usuario_idusuario para idusuario para não ficar redundante
            $table->unsignedInteger('idusuario');
            //Foi trocado a chave estrangeira de festa_idfesta para idfesta para não ficar redundante
            $table->unsignedInteger('idfesta');
            $table->dateTime('horaEntrouNaFesta');
            $table->char('presenca',1);

            $table->foreign('idusuario')->references('idusuario')->on('usuario');
            $table->foreign('idfesta')->references('idfesta')->on('festa');

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
        Schema::dropIfExists('participante');
    }
}
