<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEnderecoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Endereco', function(Blueprint $table)
		{
			$table->integer('idEndereco', true);
			$table->integer('fkUsuario')->index('idUsuario_idx');
			$table->string('titulo', 15);
			$table->string('cep', 15);
			$table->string('estado', 15);
			$table->string('cidade', 45);
			$table->string('bairro', 25);
			$table->string('rua', 45);
			$table->integer('nro');
			$table->string('compl', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Endereco');
	}

}
