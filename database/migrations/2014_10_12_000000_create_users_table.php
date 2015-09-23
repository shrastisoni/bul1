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
			$table->string('userName', 250)->unique();
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->enum('state', array('registered', 'verified', 'active', 'unactive'));
			$table->enum('roleId', array( 1, 2, 3));
			$table->rememberToken();
			$table->integer('passwordEpochUpdatedAt');
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
		//deleting users table
		Schema::drop('users');
	}

}
