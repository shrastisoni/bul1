<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsermetasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usersMeta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userId')->unsigned();
			$table->foreign('userId')->references('id')->on('users');
			$table->string('metaKey', 200);
			$table->string('metaValue', 250);
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
		Schema::drop('usermetas');
	}

}
