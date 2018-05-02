<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventOrganizationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Event_Organizations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('organization_name', 100)->nullable();
			$table->string('organization_abbreviation', 10)->nullable();
			$table->string('organization_website', 150)->nullable();
			$table->string('contact_name', 45)->nullable();
			$table->string('contact_phone', 10)->nullable();
			$table->char('rm_state', 2)->nullable();
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
		Schema::drop('Event_Organizations');
	}

}
