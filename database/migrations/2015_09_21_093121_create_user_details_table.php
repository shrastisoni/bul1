<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('userDetails', function(Blueprint $table)
		{
			$table->integer('userId')->unsigned();
			$table->foreign('userId')->references('id')->on('users');
			$table->string('name', 255);
			$table->string('location', 500);
			$table->string('profilePicPath', 255);
			$table->string('coverPicPath', 255);
			$table->string('about', 1000);
			$table->string('type', 255);
			$table->integer('businessId');
			$table->timestamps();
			$table->primary('userId');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_details');
	}

}
