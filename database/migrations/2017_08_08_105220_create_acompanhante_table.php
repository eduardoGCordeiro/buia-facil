<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcompanhanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acompanhante', function (Blueprint $table) {
            $table->unsignedInteger('users_idusuario');
            $table->unsignedInteger('festa_idfesta');
            $table->char('sexo',1);
            $table->string('nome');
            $table->Integer('idade');
            $table->string('parentesco');

            $table->foreign('users_idusuario')->references('idusuario')->on('users');
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
        Schema::dropIfExists('acompanhante');
    }
}
