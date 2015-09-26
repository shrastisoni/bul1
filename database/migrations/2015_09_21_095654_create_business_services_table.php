<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('businessServices', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('businessId')->unsigned();
			$table->foreign('businessId')->references('id')->on('businesses');
			$table->integer('serviceId');
			$table->integer('created_at');
			$table->integer('updated_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('businessServices');
	}

}
