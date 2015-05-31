<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('payments', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('user_commission_id')->unsigned();
            $table->string('brand')->nullable();
            $table->string('funding')->nullable();
            $table->integer('exp_month')->nullable();
            $table->integer('exp_year')->nullable();
            $table->string('country')->nullable();
            $table->string('status')->nullable();
            $table->string('stripe_id_payment')->nullable();
            $table->float('total');
            $table->float('taxes');
            $table->float('stripe_fee');
            $table->float('commission');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_commission_id')->references('id')->on('users');
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
        Schema::drop('payments');
	}

}
