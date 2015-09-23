<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('businesses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 200);
			$table->string('type', 200);
			$table->string('about', 1000);
			$table->string('phone', 15);
			$table->string('website', 200);
			$table->string('serviceCoverage', 500);
			$table->integer('epochCreatedAt');
			$table->integer('epochUpdatedAt');
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
		Schema::drop('businesses');
	}

}
