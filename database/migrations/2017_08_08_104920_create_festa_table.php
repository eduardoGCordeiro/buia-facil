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
            $table->unsignedInteger('users_idusuario');
            $table->decimal('valorIngresso', 10,2);
            $table->string('endereco');
            $table->string('cidade');
            $table->string('pais');
            $table->dateTime('data');
            //Trocado o nome de ehParticular só para particular
            $table->boolean('particular');

            $table->foreign('users_idusuario')->references('idusuario')->on('users');

            $table->timestamps();
            $table->softDeletes();
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
