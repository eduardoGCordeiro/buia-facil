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
        Schema::create('acompanhantes', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('festa_id');
            $table->char('sexo',1);
            $table->string('nome');
            $table->Integer('idade');
            $table->string('parentesco');

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
        Schema::dropIfExists('acompanhantes');
    }
}
