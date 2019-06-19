<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCompraProdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Compra_Prod', function(Blueprint $table)
		{
			$table->foreign('idCompra', 'fk_Compra_Prod')->references('idCompra')->on('Compra')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('idProduto', 'fk_Prod_Compra')->references('idProduto')->on('Produto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Compra_Prod', function(Blueprint $table)
		{
			$table->dropForeign('fk_Compra_Prod');
			$table->dropForeign('fk_Prod_Compra');
		});
	}

}
