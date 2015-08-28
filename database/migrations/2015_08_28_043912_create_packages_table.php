<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creating packages table to store scheme packages
		Schema::create('packages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 50);
			$table->float('price');
			$table->boolean('active');
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
		Schema::drop('packages');
	}

}
