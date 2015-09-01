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
			$table->integer('userId');
			$table->integer('businessId');
			$table->string('albumId', 200);
			$table->string('albumName', 200);
			$table->string('photoName', 200);
			$table->string('photoPath', 200);
			$table->boolean('active');
			$table->string('alterText', 200);
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
