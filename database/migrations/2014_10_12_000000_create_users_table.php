<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*****************************************************************/
/** create_users_table.php **/
/*****************************************************************/
class CreateUsersTable extends Migration
{
    /*************************************************************/
    /** UP Migration **/
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /*************************************************************/
    /** DOWN (Reverse) Migration **/
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
