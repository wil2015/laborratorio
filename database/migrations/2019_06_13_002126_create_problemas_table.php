<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProblemasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('problemas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descricao', 45)->nullable();
			$table->integer('equipamento_id')->index('fk_problemas_equipamento1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('problemas');
	}

}
