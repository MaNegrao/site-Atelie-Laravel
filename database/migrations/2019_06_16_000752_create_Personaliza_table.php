<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonalizaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Personaliza', function(Blueprint $table)
		{
			$table->integer('idPersonaliza', true);
			$table->integer('idProduto')->nullable()->index('fk_Personaliza_Prod_idx');
			$table->string('tipo', 45);
			$table->dateTime('dthr');
			$table->string('des', 150);
			$table->string('pedra', 45)->nullable();
			$table->string('acab', 45);
			$table->string('mat', 45)->nullable();
			$table->string('matCli', 45)->nullable();
			$table->string('anexos', 45)->nullable();
			$table->string('status', 45);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Personaliza');
	}

}
