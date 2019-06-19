<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Usuario', function(Blueprint $table)
		{
			$table->integer('idUsuario', true);
			$table->string('nome', 45);
			$table->string('cpf', 15)->unique('cpf_UNIQUE');
			$table->string('email', 45)->unique('email_UNIQUE');
			$table->string('senha', 20);
			$table->dateTime('dtNasc');
			$table->string('cel', 15);
			$table->char('sexo', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Usuario');
	}

}
