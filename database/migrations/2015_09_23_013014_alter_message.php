<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterMessage extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	
	public function up()
	{
		Schema::create('message_meta', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('subject', 250);
			$table->boolean('archived_status');
		});

		Schema::create('message_receipient', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('meta_Id', 50);
			$table->string('receipient_ID', 50);
			$table->boolean('notification_status');
		});

		Schema::create('message_content', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('meta_Id', 50);
			$table->longText('message');
			$table->longText('subject');
			$table->string('from', 250);
			$table->integer('created_at');
			$table->integer('updated_at');
			$table->boolean('notification_status');
		});
		

		Schema::create('message_attachment', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('content_ID', 50);
			$table->string('attachment_path', 250);
			$table->string('attachment_name', 250);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
