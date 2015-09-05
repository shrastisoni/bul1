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
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			$table->string('name', 200);
			$table->string('email', 200);
			$table->string('membershipLevel', 200);
			$table->string('type', 200);
			$table->string('location', 200);
			$table->string('servicing', 200);
			$table->string('phone', 20);
			$table->string('profilePhotoPath', 200);
			$table->string('coverPhotoPath', 200);
			$table->string('website', 200);
			$table->integer('followersCount');
			$table->integer('reviewsCount');
			$table->float('rating');
			$table->string('aboutUs', 5000);
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
