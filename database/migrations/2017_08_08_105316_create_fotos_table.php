<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->increments('idfotos');
            $table->string('nomefoto');
            $table->boolean('aprovada');
            //Foi trocado a chave estrangeira de festa_idfesta para idfesta para não ficar redundante
            $table->unsignedInteger('idfesta');

            $table->primary('idfotos');

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
        Schema::dropIfExists('fotos');
    }
}
