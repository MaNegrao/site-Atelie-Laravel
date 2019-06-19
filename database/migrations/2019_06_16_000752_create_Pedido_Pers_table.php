<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePedidoPersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Pedido_Pers', function(Blueprint $table)
		{
			$table->integer('idUsuario');
			$table->integer('idPersonaliza')->index('fk_Pers_Pedido_idx');
			$table->primary(['idUsuario','idPersonaliza']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Pedido_Pers');
	}

}
