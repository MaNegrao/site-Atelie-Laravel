<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMetPagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Met_Pag', function(Blueprint $table)
		{
			$table->foreign('idUsuario', 'fk_Met_Pag_Usuario')->references('idUsuario')->on('Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Met_Pag', function(Blueprint $table)
		{
			$table->dropForeign('fk_Met_Pag_Usuario');
		});
	}

}
