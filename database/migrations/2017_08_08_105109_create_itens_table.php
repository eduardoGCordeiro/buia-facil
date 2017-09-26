<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('itens', function (Blueprint $table) {
            $table->integer('festa_id', false, true);
            $table->string('nome');
            $table->decimal('preco_individual', 10, 2);
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('festa_id')->references('id')->on('festa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('itens');
    }
}
