<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventNamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Event_Names', function(Blueprint $table)
		{
			$table->foreign('Event_Organization_id', 'fk_Event_Organizations')->references('id')->on('Event_Organizations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('NYAL_Season_id', 'fk_NYAL_Season')->references('id')->on('NYAL_Seasons')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('Event_Type_id', 'fk_event_names_event_types')->references('id')->on('Event_Types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Event_Names', function(Blueprint $table)
		{
			$table->dropForeign('fk_Event_Organizations');
			$table->dropForeign('fk_NYAL_Season');
			$table->dropForeign('fk_event_names_event_types');
		});
	}

}
