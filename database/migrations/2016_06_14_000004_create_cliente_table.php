<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('IdCliente');
            $table->tinyInteger('TipoPessoa');
            $table->string('Email', 40)->nullable()->default(NULL);
            $table->string('CPF_CNPJ', 18)->nullable()->default(NULL);
            $table->date('DataNascimento')->nullable()->default(NULL);
            $table->bigInteger('TelResidencial')->nullable()->default(NULL);
            $table->bigInteger('TelCelular')->nullable()->default(NULL);
            $table->integer('FK_IdLogradouro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cliente');
    }
}