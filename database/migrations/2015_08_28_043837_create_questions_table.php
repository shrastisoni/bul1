<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creating questions table to store question and its details
		Schema::create('questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title', 500);
			$table->string('description', 2500);
			$table->integer('commentsCount');
			$table->integer('likesCount');
			$table->integer('postedByUserId');
			$table->string('hashId', 60);
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
		Schema::drop('questions');
	}

}
