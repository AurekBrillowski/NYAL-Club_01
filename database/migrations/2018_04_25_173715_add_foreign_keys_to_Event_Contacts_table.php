<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEventContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Event_Contacts', function(Blueprint $table)
		{
			$table->foreign('Event_Organization_ID', 'Fk_Event_Contact_Event_Organization')->references('id')->on('Event_Organizations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('USATF_Association_id', 'Fk_Event_Contact_USATF_Association')->references('id')->on('USATF_Associations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('Event_Contacts', function(Blueprint $table)
		{
			$table->dropForeign('Fk_Event_Contact_Event_Organization');
			$table->dropForeign('Fk_Event_Contact_USATF_Association');
		});
	}

}
