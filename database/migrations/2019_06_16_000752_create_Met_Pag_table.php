<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMetPagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Met_Pag', function(Blueprint $table)
		{
			$table->integer('idMet_Pag', true);
			$table->integer('idUsuario')->index('fk_Met_Pag_Usuario_idx');
			$table->string('cpf', 45);
			$table->string('tipo', 45);
			$table->string('nro_cartao', 16)->nullable();
			$table->string('titular', 45)->nullable();
			$table->string('cvc', 3)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Met_Pag');
	}

}
