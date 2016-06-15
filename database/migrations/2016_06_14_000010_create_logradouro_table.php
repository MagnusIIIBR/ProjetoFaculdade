<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogradouroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logradouro', function (Blueprint $table) {
            $table->increments('IdLogradouro');
            $table->string('NomeLogradouro', 60);
            $table->integer('CEP');
            $table->integer('FK_IdBairro');
            $table->integer('FK_IdtipoLogradouro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('logradouro');
    }
}