<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventNamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Event_Names', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('event_name', 100)->nullable();
			$table->string('alpha_sort_name', 100)->nullable();
			$table->integer('Event_Organization_id')->unsigned()->index('idx_Organization_ID');
			$table->integer('Event_Type_id')->unsigned()->index('idx_CompetitionType_ID');
			$table->integer('NYAL_Season_id')->unsigned()->default(0)->index('idx_NYAL_Season_ID');
			$table->boolean('club_race', 1)->nullable();
			$table->boolean('school_race', 1)->nullable();
			$table->boolean('month_id')->nullable();
			$table->string('race_website', 150)->nullable();
			$table->boolean('tentative', 1)->nullable();
			$table->boolean('confirmed', 1)->nullable();
			$table->boolean('data_updated', 1)->nullable();
			$table->date('current_year_date')->nullable();
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
		Schema::drop('Event_Names');
	}

}
