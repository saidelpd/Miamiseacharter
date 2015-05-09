<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTimesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('services_times', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('services_id')->unsigned();
            $table->time('time_start');
            $table->time('time_end');
            $table->foreign('services_id')->references('id')->on('services');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('services_times');
	}

}
