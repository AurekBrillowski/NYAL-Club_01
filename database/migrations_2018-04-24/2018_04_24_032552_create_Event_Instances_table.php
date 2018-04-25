<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Event_Instances', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('Event_Name_id')->unsigned()->index('idx_EventInstance');
			$table->integer('Event_Results_Imports_ID')->unsigned()->nullable();
			$table->string('competition_name', 100)->nullable();
			$table->string('competition_type', 45)->nullable()->default('Track and Field Meet');
			$table->string('instance_year', 4)->nullable()->default('2018');
			$table->date('instance_date')->nullable();
			$table->string('place', 100)->nullable();
			$table->string('address', 100)->nullable();
			$table->string('city', 50)->nullable();
			$table->char('state', 2)->nullable();
			$table->string('zip', 10)->nullable();
			$table->string('logo_url', 200)->nullable();
			$table->string('time_meetup', 50)->nullable();
			$table->string('time_race', 50)->nullable();
			$table->string('time_awards', 50)->nullable()->comment('VALUES: "Easy", "Moderate", etc.');
			$table->string('time_travel_range', 20)->nullable();
			$table->string('time_registration_range', 20)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Event_Instances');
	}

}
