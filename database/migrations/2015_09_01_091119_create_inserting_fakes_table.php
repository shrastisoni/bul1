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
    			'name' => 'User 1',
    			'uName' => 'User-1',
    			'email' => 'useremail1@horsify.com',
    			'password' => bcrypt('password'),
    			'role_id' => '1',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('users')->insert(
    			[
    			'name' => 'User 2',
    			'uName' => 'User-2',
    			'email' => 'useremail2@horsify.com',
    			'password' => bcrypt('password'),
    			'role_id' => '1',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('users')->insert(
    			[
    			'name' => 'User 3',
    			'uName' => 'User-3',
    			'email' => 'useremail3@horsify.com',
    			'password' => bcrypt('password'),
    			'role_id' => '1',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
		DB::table('businesses')->insert(
    			[
    			'user_id' => 1, 
    			'name' => 'Business 1',
    			'uName' => 'Business-1',
    			'email' => 'email1@horsify.com',
    			'membershipLevel' => 'Level 1',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 1',
    			'servicing' => 'Servicing 1',
    			'phone' => '0000000001',
    			'website' => 'website 1',
    			'profilePhotoPath' => '/images/bg-logo.png',
    			'coverPhotoPath' => '/images/bg.jpg',
    			'followersCount' => 7,
    			'reviewsCount' => 4,
    			'rating' => 3.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 1 is actually doing',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'user_id' => 2, 
    			'name' => 'Business 2',
    			'uName' => 'Business-2',
    			'email' => 'email2@horsify.com',
    			'membershipLevel' => 'Level 2',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 2',
    			'servicing' => 'Servicing 2',
    			'phone' => '0000000002',
    			'website' => 'website 2',
    			'profilePhotoPath' => '/images/followers-3.png',
    			'coverPhotoPath' => '/images/photos-2.png',
    			'followersCount' => 9,
    			'reviewsCount' => 9,
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 2 is actually doing',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'user_id' => 3, 
    			'name' => 'Business 3',
    			'uName' => 'Business-3',
    			'email' => 'email3@horsify.com',
    			'membershipLevel' => 'Level 3',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 3',
    			'servicing' => 'Servicing 3',
    			'phone' => '0000000003',
    			'website' => 'website 3',
    			'profilePhotoPath' => '/images/followers-4.png',
    			'coverPhotoPath' => '/images/photos-3.png',
    			'followersCount' => 5,
    			'reviewsCount' => 6,
    			'rating' => 2.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 3 is actually doing',
    			'epochCreatedAt' => time(),
    			'epochUpdatedAt' => time()
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
