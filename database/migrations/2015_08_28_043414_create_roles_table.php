<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('roleId');
			$table->string('value', 50);
			$table->integer('created_at');
			$table->integer('updated_at');
		});
		
		// Insert some stuff
		DB::table('roles')->insert(
		    array(
		        'roleId' => '1',
		        'value' => 'Normal user'
		    )
		);
		// Insert some stuff
		DB::table('roles')->insert(
		    array(
		        'roleId' => '2',
		        'value' => 'Admin user'
		    )
		);
		// Insert some stuff
		DB::table('roles')->insert(
		    array(
		        'roleId' => '3',
		        'value' => 'Super Admin user'
		    )
		);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//delete roles table
		Schema::drop('roles');
	}

}
