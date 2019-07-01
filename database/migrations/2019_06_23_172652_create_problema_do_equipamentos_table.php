<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemaDoEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problema_do_equipamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('equipamento_id')->unsigned();
			$table->foreign('equipamento_id')->references('id')->on('equipamentos');
            $table->integer('descricao_id')->unsigned();
			$table->foreign('descricao_id')->references('id')->on('defeitos');
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
        Schema::dropIfExists('problema_do_equipamentos');
    }
}
