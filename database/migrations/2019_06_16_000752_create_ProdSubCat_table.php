<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdSubCatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ProdSubCat', function(Blueprint $table)
		{
			$table->integer('idSubCat',true);
			$table->integer('idCat')->index('fk_Categoria_Sub_idx');
			$table->string('nome', 50);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ProdSubCat');
	}

}
