<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLikesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creating likes table to store likes and its details
		Schema::create('likes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('byUserId');
			$table->string('toType', 50);
			$table->integer('typeId');
			$table->boolean('permit');
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
		//deleting likes table
		Schema::drop('likes');
	}

}
