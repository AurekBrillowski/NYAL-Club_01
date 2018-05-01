<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventContactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Event_Contacts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('contact_name_full', 100)->nullable();
			$table->string('contact_name_last', 100)->nullable();
			$table->string('contact_name_first', 100)->nullable();
			$table->string('contact_phone_1_number', 14)->nullable();
			$table->string('contact_phone_1_type', 30)->nullable();
			$table->string('contact_phone_2_number', 14)->nullable();
			$table->string('contact_2_phone_type', 30)->nullable();
			$table->string('contact_email_1_address', 100)->nullable();
			$table->string('contact_email_1_type', 30)->nullable();
			$table->string('contact_email_2_address', 100)->nullable();
			$table->string('contact_2_email_type', 30)->nullable();
			$table->integer('Event_Organization_ID')->unsigned()->index('Idx_Event_Contact_Event_Organization_ID');
			$table->integer('USATF_Association_id')->unsigned()->index('Idx_Event_Contact_USATF_Association_ID');
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
		Schema::drop('Event_Contacts');
	}

}
