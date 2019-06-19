<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTamProdTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Tam_Prod', function(Blueprint $table)
		{
			$table->foreign('idProduto', 'fk_Prod_Tam')->references('idProduto')->on('Produto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('idTam', 'fk_Tam_Prod')->references('idTam')->on('Tamanho')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Tam_Prod', function(Blueprint $table)
		{
			$table->dropForeign('fk_Prod_Tam');
			$table->dropForeign('fk_Tam_Prod');
		});
	}

}
