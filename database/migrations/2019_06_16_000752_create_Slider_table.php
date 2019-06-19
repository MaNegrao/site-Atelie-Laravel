<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSliderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Slider', function(Blueprint $table)
		{
			$table->integer('idSlider', true);
			$table->string('page', 20);
			$table->string('alt', 200);
			$table->string('img', 100)->nullable();
			$table->string('msgSpan', 100);
			$table->string('msgH2', 100);
			$table->string('msgP', 200);
			$table->char('link', 200);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Slider');
	}

}
