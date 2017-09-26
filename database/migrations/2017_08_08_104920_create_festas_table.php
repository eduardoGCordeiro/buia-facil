<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFestaTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('festas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id', false, true);
            $table->decimal('valor_ingresso', 10, 2);
            $table->string('endereco');
            $table->string('cidade');
            $table->string('pais');
            $table->timestamp('data');
            $table->boolean('particular');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('festas');
    }
}
