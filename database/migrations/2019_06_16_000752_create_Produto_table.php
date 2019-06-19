<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdutoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Produto', function(Blueprint $table)
		{
			$table->integer('idProduto', true);
			$table->string('nome', 45);
			$table->decimal('val', 12.2);
			$table->decimal('peso', 12.2);
			$table->string('img', 45);
			$table->string('img2', 45)->nullable();
			$table->string('img3', 45)->nullable();
			$table->integer('cat');
			$table->integer('subCat');
			$table->string('mater', 15);
			$table->char('seg', 1);
			$table->string('des', 200);
			$table->string('acab', 45);
			$table->string('pedra', 15)->nullable();
			$table->decimal('promoDesc', 12)->nullable();
			$table->integer('promoPor')->nullable();
			$table->string('promoMsg', 30)->nullable();
			$table->index(['cat','subCat'], 'fk_Cat_Produto_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Produto');
	}

}
