<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('first',100);
            $table->string('last',100);
            $table->string('email')->unique();
            $table->string('phone',100);
            $table->string('code',4)->unique();
            $table->string('password', 250);
            $table->integer('roles_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('roles_id')->references('id')->on('roles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
