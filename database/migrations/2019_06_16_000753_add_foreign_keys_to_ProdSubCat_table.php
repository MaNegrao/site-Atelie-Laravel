<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProdSubCatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ProdSubCat', function(Blueprint $table)
		{
			$table->foreign('idCat', 'fk_SubCat_Cat')->references('idCat')->on('ProdCat')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ProdSubCat', function(Blueprint $table)
		{
			$table->dropForeign('fk_SubCat_Cat');
		});
	}

}
