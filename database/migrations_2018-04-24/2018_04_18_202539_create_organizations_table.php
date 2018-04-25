<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organizations', function (Blueprint $table) {
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
        Schema::dropIfExists('organizations');
    }
}
