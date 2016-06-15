<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto', function (Blueprint $table) {
            $table->increments('IdProduto');
            $table->decimal('Preco', 10, 2);
            $table->integer('Quantidade');
            $table->integer('FK_IdFornecedor');
            $table->integer('FK_IdMarca');
            $table->integer('FK_IdCalcado');
            $table->integer('FK_IdCorCalcado');
            $table->integer('FK_IdGenero');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('produto');
    }
}