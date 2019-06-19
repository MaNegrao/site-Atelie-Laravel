<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Produto', function(Blueprint $table)
		{
			$table->foreign('cat', 'fk_cat_prod')->references('idCat')->on('ProdCat')->onUpdate('RESTRICT')->onDelete('CASCADE');
			$table->foreign('subCat', 'fk_subCat_Produtos')->references('idSubCat')->on('ProdSubCat')->onUpdate('RESTRICT')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Produto', function(Blueprint $table)
		{
			$table->dropForeign('fk_subCat_Produtos');
		});
	}

}
