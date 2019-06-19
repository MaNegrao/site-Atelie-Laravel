<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPedidoPersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Pedido_Pers', function(Blueprint $table)
		{
			$table->foreign('idUsuario', 'fk_Pedido_Pers')->references('idUsuario')->on('Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('idPersonaliza', 'fk_Pers_Pedido')->references('idPersonaliza')->on('Personaliza')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Pedido_Pers', function(Blueprint $table)
		{
			$table->dropForeign('fk_Pedido_Pers');
			$table->dropForeign('fk_Pers_Pedido');
		});
	}

}
