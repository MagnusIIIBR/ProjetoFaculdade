<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->increments('IdFuncionario');
            $table->string('Nome', 60);
            $table->integer('CPF')->nullable()->default(NULL);
            $table->date('DataNascimento')->nullable()->default(NULL);
            $table->bigInteger('TelResidencial')->nullable()->default(NULL);
            $table->bigInteger('TelCelular')->nullable()->default(NULL);
            $table->string('Login', 20)->nullable()->default(NULL);
            $table->string('Senha', 15)->nullable()->default(NULL);
            $table->integer('FK_IdLogradouro');
            $table->integer('FK_IdCargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('funcionario');
    }
}