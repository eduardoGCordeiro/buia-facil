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
            $table->unsignedInteger('usuario_idusuario');
            $table->unsignedInteger('festa_idfesta');
            $table->dateTime('horaEntrouNaFesta');
            $table->char('presenca',1);

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
        Schema::dropIfExists('participante');
    }
}
