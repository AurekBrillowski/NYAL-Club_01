<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUSATFAssociationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('USATF_Associations', function(Blueprint $table)
		{
			$table->foreign('Event_Organization_id', 'Fk_USATF_Association_Event_Organization')->references('id')->on('Event_Organizations')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('USATF_Associations', function(Blueprint $table)
		{
			$table->dropForeign('Fk_USATF_Association_Event_Organization');
		});
	}

}
