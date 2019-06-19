<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompraTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Compra', function(Blueprint $table)
		{
			$table->integer('idCompra', true);
			$table->integer('idUsuario')->index('fk_Compra_1_idx');
			$table->integer('idEndereco')->index('fk_Compra_Endereco_idx');
			$table->integer('idMet_Pag')->index('fk_Compra_Met_Pag_idx');
			$table->decimal('valTot', 12);
			$table->dateTime('dthr');
			$table->string('status', 45);
			$table->string('estEnt', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Compra');
	}

}
