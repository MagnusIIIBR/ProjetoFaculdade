<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFornecedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedor', function (Blueprint $table) {
            $table->increments('IdFornecedor');
            $table->string('RazaoSocial', 60)->nullable()->default(NULL);
            $table->string('NomeFantasia', 60)->nullable()->default(NULL);
            $table->string('CNPJ', 18)->nullable()->default(NULL);
            $table->bigInteger('TelEmpresa')->nullable()->default(NULL);
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
        Schema::drop('fornecedor');
    }
}