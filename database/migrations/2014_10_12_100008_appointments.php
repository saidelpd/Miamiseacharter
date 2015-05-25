<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Appointments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('appointments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('services_id')->unsigned();
            $table->integer('payments_id')->unsigned();
            $table->integer('boat_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('start');
            $table->dateTime('end');
            $table->foreign('services_id')->references('id')->on('services');
            $table->foreign('payments_id')->references('id')->on('payments');
            $table->foreign('boat_id')->references('id')->on('boats');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::drop('appointments');
	}

}
