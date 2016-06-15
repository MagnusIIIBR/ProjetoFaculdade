<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendaprodutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendaproduto', function (Blueprint $table) {
            $table->increments('Id_VendaProduto');
            $table->integer('Quantidade_Produto')->nullable()->default(NULL);
            $table->decimal('Valor_Produto', 10, 2)->nullable()->default(NULL);
            $table->integer('FK_IdProduto');
            $table->integer('FK_IdVenda');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('vendaproduto');
    }
}