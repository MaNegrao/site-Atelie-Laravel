<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonalizaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Personaliza', function(Blueprint $table)
		{
			$table->foreign('idProduto', 'fk_Personaliza_Prod')->references('idProduto')->on('Produto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Personaliza', function(Blueprint $table)
		{
			$table->dropForeign('fk_Personaliza_Prod');
		});
	}

}
