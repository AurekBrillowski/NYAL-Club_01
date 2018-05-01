<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventInstancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Event_Instances', function(Blueprint $table)
		{
			$table->foreign('Event_Name_id', 'fk_eventinstance_event_name')->references('id')->on('Event_Names')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Event_Instances', function(Blueprint $table)
		{
			$table->dropForeign('fk_eventinstance_event_name');
		});
	}

}
