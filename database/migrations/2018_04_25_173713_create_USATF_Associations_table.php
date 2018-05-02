<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUSATFAssociationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('USATF_Associations', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('association_name', 100)->nullable();
			$table->integer('Event_Organization_id')->unsigned()->index('Idx_USATF_Association_Event_Organization_ID');
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
		Schema::drop('USATF_Associations');
	}

}
