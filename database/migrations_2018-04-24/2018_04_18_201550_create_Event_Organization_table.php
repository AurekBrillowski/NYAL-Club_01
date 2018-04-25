<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventOrganizationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Event_Organization', function(Blueprint $table)
		{
			$table->increments('Event_Organization_ID');
			$table->string('organization_name', 100)->nullable();
			$table->string('organization_abbreviation', 10)->nullable();
			$table->string('organization_website', 150)->nullable();
			$table->string('contact_name', 45)->nullable();
			$table->string('contact_phone', 10)->nullable();
			$table->char('rm_state', 2)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Event_Organization');
	}

}
