<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Compra', function(Blueprint $table)
		{
			$table->foreign('idEndereco', 'fk_Compra_Endereco')->references('idEndereco')->on('Endereco')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('idMet_Pag', 'fk_Compra_Met_Pag')->references('idMet_Pag')->on('Met_Pag')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('idUsuario', 'fk_Compra_Usuario')->references('idUsuario')->on('Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Compra', function(Blueprint $table)
		{
			$table->dropForeign('fk_Compra_Endereco');
			$table->dropForeign('fk_Compra_Met_Pag');
			$table->dropForeign('fk_Compra_Usuario');
		});
	}

}
