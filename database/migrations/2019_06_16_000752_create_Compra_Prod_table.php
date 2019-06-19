<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompraProdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Compra_Prod', function(Blueprint $table)
		{
			$table->integer('idProduto');
			$table->integer('idCompra')->index('fk_Compra_Prod_idx');
			$table->primary(['idProduto','idCompra']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Compra_Prod');
	}

}
