<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            //Foi trocado a chave estrangeira de festa_idfesta para idfesta para não ficar redundante
            $table->unsignedInteger('idfesta');
            $table->string('nome');
            $table->decimal('precoIndividual', 10.2);
            $table->integer('quantidade');

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
        Schema::dropIfExists('item');
    }
}
