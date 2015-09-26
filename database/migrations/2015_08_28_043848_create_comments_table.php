<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//creating comments table to store comment and its details
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('comment', 2500);
			$table->integer('postedByUserId');
			$table->integer('onQuestionId');
			$table->integer('likesCount');
			$table->string('hashId', 60);
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
		Schema::drop('comments');
	}

}
