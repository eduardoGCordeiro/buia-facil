<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConvidadoTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('convidados', function (Blueprint $table) {
            $table->integer('user_id', false, true);
            $table->boolean('tem_permissao_convite');
            $table->integer('festa_id', false, true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('festa_id')->references('id')->on('festas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('convidados');
    }
}
