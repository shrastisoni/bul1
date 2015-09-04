<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoAlbumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('photoAlbums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('userId')->unsigned();
			$table->foreign('userId')->references('id')->on('users');
			$table->string('type', 200);
			$table->string('name', 200);
			$table->string('path', 200);
			$table->integer('linkWith'); //if type 'album' then 'link with n photos' else if type is 'photo' then link with album id n
			$table->boolean('active');
			$table->string('about', 500);
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
		Schema::drop('photo_albums');
	}

}
