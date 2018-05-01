<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNYALSeasonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('NYAL_Seasons', function(Blueprint $table)
		{
			$table->integer('id')->unsigned()->primary();
			$table->string('season_name', 10)->nullable();
			$table->string('season_month_desc', 45)->nullable();
            $table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('NYAL_Seasons');
	}

}
