<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historicos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('usuario');  
			$table->dateTime('data_inicio');
			$table->dateTime('data_fim')->nullable();
			$table->time('tempo_uso')->nullable();
			$table->integer('id_usuario')->nullable();
			$table->string('observacao', 45)->nullable();
			$table->integer('quantidade_de_amostras')->nullable();
			$table->integer('equipamento_id')->unsigned();
			$table->foreign('equipamento_id')->references('id')->on('equipamentos');
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
        Schema::dropIfExists('historicos');
    }
}
