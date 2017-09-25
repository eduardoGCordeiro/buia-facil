<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensagensTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('festa_id', false, true);
            $table->string('titulo');
            $table->longText('texto');
            $table->timestamps();

            $table->foreign('festa_id')->references('id')->on('festas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('mensagens');
    }
}
