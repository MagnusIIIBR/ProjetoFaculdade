<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalcadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calcado', function (Blueprint $table) {
            $table->increments('IdCalcado');
            $table->string('TipoCalcado', 60)->nullable()->default(NULL);
            $table->integer('Numero')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('calcado');
    }
}