<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBadgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creating badges table to store likes and its details
		Schema::create('badges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('imagePath', 200);
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
		//deleting badges table
		Schema::drop('badges');
	}

}
