<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTamProdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Tam_Prod', function(Blueprint $table)
		{
			$table->integer('idTam');
			$table->integer('idProduto')->index('fk_Prod_Tam_idx');
			$table->primary(['idTam','idProduto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Tam_Prod');
	}

}
