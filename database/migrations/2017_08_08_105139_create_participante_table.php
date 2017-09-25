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
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('festa_id');
            $table->dateTime('hora_entrada');
            $table->char('presenca',1);

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('festa_id')->references('id')->on('festas');

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
