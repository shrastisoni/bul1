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
			$table->integer('role_id');
			$table->string('role_name', 50);
			$table->timestamps();
		});
		
		// Insert some stuff
		DB::table('roles')->insert(
		    array(
		        'role_id' => '1',
		        'role_name' => 'Normal user'
		    )
		);
		// Insert some stuff
		DB::table('roles')->insert(
		    array(
		        'role_id' => '2',
		        'role_name' => 'Admin user'
		    )
		);
		// Insert some stuff
		DB::table('roles')->insert(
		    array(
		        'role_id' => '3',
		        'role_name' => 'Super Admin user'
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
