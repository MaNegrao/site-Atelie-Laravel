<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Endereco', function(Blueprint $table)
		{
			$table->foreign('fkUsuario', 'fkEnd_Usuario')->references('idUsuario')->on('Usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Endereco', function(Blueprint $table)
		{
			$table->dropForeign('fkEnd_Usuario');
		});
	}

}
