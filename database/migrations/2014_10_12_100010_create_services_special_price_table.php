<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesSpecialPriceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('services_special_price', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('services_id')->unsigned();
            $table->integer('special_hour');
            $table->float('special_price');
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
        Schema::drop('services_special_price');
	}

}
