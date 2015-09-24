<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsertingFakesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('users')->insert(
    			[
    			'userName' => 'User1',
    			'email' => 'useremail1@horsify.com',
    			'password' => bcrypt('password'),
    			'state' => 'active',
    			'roleId' => 1,
    			'passwordEpochUpdatedAt' => time(),
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
		DB::table('users')->insert(
    			[
    			'userName' => 'User2',
    			'email' => 'useremail2@horsify.com',
    			'password' => bcrypt('password'),
    			'state' => 'active',
    			'roleId' => 1,
    			'passwordEpochUpdatedAt' => time(),
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
		DB::table('users')->insert(
    			[
    			'userName' => 'User3',
    			'email' => 'useremail3@horsify.com',
    			'password' => bcrypt('password'),
    			'state' => 'active',
    			'roleId' => 1,
    			'passwordEpochUpdatedAt' => time(),
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
		
		DB::table('users')->insert(
    			[
    			'userName' => 'User4',
    			'email' => 'useremail4@horsify.com',
    			'password' => bcrypt('password'),
    			'state' => 'active',
    			'roleId' => 1,
    			'passwordEpochUpdatedAt' => time(),
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			
		DB::table('businesses')->insert(
    			[
    			'name' => 'Business 1',
    			'type' => 'Horse Trading & Farming',
    			'about' => 'Hey here we are talking about that what is business 1 is actually doing',
    			'phone' => '9898-989-898',
    			'website' => 'business1.horsify.com',
    			'serviceCoverage' => 'Servicing 1',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
		DB::table('businesses')->insert(
    			[
    			'name' => 'Business 2',
    			'type' => 'Horse Trading & Farming',
    			'about' => 'Hey here we are talking about that what is business 2 is actually doing',
    			'phone' => '8787-878-787',
    			'website' => 'business2.horsify.com',
    			'serviceCoverage' => 'Servicing 2',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
		DB::table('businesses')->insert(
    			[
    			'name' => 'Business 3',
    			'type' => 'Horse Trading & Farming',
    			'about' => 'Hey here we are talking about that what is business 3 is actually doing',
    			'phone' => '7676-767-676',
    			'website' => 'business3.horsify.com',
    			'serviceCoverage' => 'Servicing 3',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
		DB::table('userDetails')->insert(
    			[
    			'userId' => 1,
    			'name' => 'User 1',
    			'location' => '123 sample st, Sample town 6021',
    			'profilePicPath' => '/images/bg-logo.png',
    			'coverPicPath' => '/images/bg.jpg',
    			'about' => 'This is about user 1',
    			'type' => 'Horse Enthusiast',
    			'businessId' => 1
    			]
			);
		DB::table('userDetails')->insert(
    			[
    			'userId' => 4,
    			'name' => 'User 4',
    			'location' => '44 sample st, Sample town 4444',
    			'profilePicPath' => '/images/bg-logo.png',
    			'coverPicPath' => '/images/bg.jpg',
    			'about' => 'This is about user 4',
    			'type' => 'Horse Enthusiast',
    			'businessId' => 0
    			]
			);
		
		DB::table('userDetails')->insert(
    			[
    			'userId' => 2,
    			'name' => 'User 2',
    			'location' => '123 sample st, Sample town 6021',
    			'profilePicPath' => '/images/followers-3.png',
    			'coverPicPath' => '/images/photos-2.png',
    			'about' => 'This is about user 2',
    			'type' => 'Horse Enthusiast',
    			'businessId' => 2
    			]
			);
			DB::table('userDetails')->insert(
    			[
    			'userId' => 3,
    			'name' => 'User 3',
    			'location' => '',
    			'profilePicPath' => '/images/followers-4.png',
    			'coverPicPath' => '/images/photos-3.png',
    			'about' => 'This is about user 3',
    			'type' => 'Horse Enthusiast',
    			'businessId' => 3
    			]
			);
		
			DB::table('photoAlbums')->insert(
    			[
    			'user_id' => 1, 
    			'type' => 'album',
    			'name' => 'Album 1',
    			'path' => '/images/photos-1.png',
    			'active' => TRUE,
    			'linkWith' => 2,
    			'about' => 'Horse Trading & Farming 1',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('photoAlbums')->insert(
    			[
    			'user_id' => 1, 
    			'type' => 'album',
    			'name' => 'Album 2',
    			'path' => '/images/photos-2.png',
    			'active' => TRUE,
    			'linkWith' => 0,
    			'about' => 'Horse Trading & Farming 2',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('photoAlbums')->insert(
    			[
    			'user_id' => 1, 
    			'type' => 'album',
    			'name' => 'Album 3',
    			'path' => '/images/photos-3.png',
    			'active' => TRUE,
    			'linkWith' => 1,
    			'about' => 'Horse Trading & Farming 3',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('photoAlbums')->insert(
    			[
    			'user_id' => 1, 
    			'type' => 'photo',
    			'name' => 'Photo 1',
    			'path' => '/images/bg.jpg',
    			'active' => TRUE,
    			'linkWith' => 1,
    			'about' => 'This is Photo 1',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('photoAlbums')->insert(
    			[
    			'user_id' => 1, 
    			'type' => 'photo',
    			'name' => 'Photo 2',
    			'path' => '/images/bg.jpg',
    			'active' => TRUE,
    			'linkWith' => 1,
    			'about' => 'This is Photo 2',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('photoAlbums')->insert(
    			[
    			'user_id' => 1, 
    			'type' => 'photo',
    			'name' => 'Photo 3',
    			'path' => '/images/bg.jpg',
    			'active' => TRUE,
    			'linkWith' => 3,
    			'about' => 'This is Photo 1 of this album',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inserting_fakes');
	}

}
