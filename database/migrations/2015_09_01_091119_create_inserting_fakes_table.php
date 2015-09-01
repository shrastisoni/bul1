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
		DB::table('businesses')->insert(
    			[
    			'userId' => 1, 
    			'name' => 'Business 1',
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
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 1 is actually doing'
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'userId' => 1, 
    			'name' => 'Business 2',
    			'email' => 'email2@horsify.com',
    			'membershipLevel' => 'Level 2',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 2',
    			'servicing' => 'Servicing 2',
    			'phone' => '0000000002',
    			'website' => 'website 2',
    			'profilePhotoPath' => '/images/bg-logo.png',
    			'coverPhotoPath' => '/images/bg.jpg',
    			'followersCount' => 9,
    			'reviewsCount' => 9,
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 2 is actually doing'
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'userId' => 1, 
    			'name' => 'Business 3',
    			'email' => 'email3@horsify.com',
    			'membershipLevel' => 'Level 3',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 3',
    			'servicing' => 'Servicing 3',
    			'phone' => '0000000003',
    			'website' => 'website 3',
    			'profilePhotoPath' => '/images/bg-logo.png',
    			'coverPhotoPath' => '/images/bg.jpg',
    			'followersCount' => 5,
    			'reviewsCount' => 6,
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 3 is actually doing'
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'userId' => 2, 
    			'name' => 'Business 4',
    			'email' => 'email4@horsify.com',
    			'membershipLevel' => 'Level 1',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 4',
    			'servicing' => 'Servicing 4',
    			'phone' => '0000000004',
    			'website' => 'website 4',
    			'profilePhotoPath' => '/images/bg-logo.png',
    			'coverPhotoPath' => '/images/bg.jpg',
    			'followersCount' => 8,
    			'reviewsCount' => 34,
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 4 is actually doing'
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'userId' => 2, 
    			'name' => 'Business 5',
    			'email' => 'email5@horsify.com',
    			'membershipLevel' => 'Level 2',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 5',
    			'servicing' => 'Servicing 5',
    			'phone' => '0000000005',
    			'website' => 'website 5',
    			'profilePhotoPath' => '/images/bg-logo.png',
    			'coverPhotoPath' => '/images/bg.jpg',
    			'followersCount' => 79,
    			'reviewsCount' => 786,
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 5 is actually doing'
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'userId' => 2, 
    			'name' => 'Business 6',
    			'email' => 'email6@horsify.com',
    			'membershipLevel' => 'Level 3',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 6',
    			'servicing' => 'Servicing 6',
    			'phone' => '0000000006',
    			'website' => 'website 6',
    			'profilePhotoPath' => '/images/bg-logo.png',
    			'coverPhotoPath' => '/images/bg.jpg',
    			'followersCount' => 76,
    			'reviewsCount' => 67,
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 6 is actually doing'
    			]
			);
			DB::table('businesses')->insert(
    			[
    			'userId' => 2, 
    			'name' => 'Business 7',
    			'email' => 'myemail@horsify.com',
    			'membershipLevel' => 'Platinum',
    			'type' => 'Horse Trading & Farming',
    			'location' => 'Location 7',
    			'servicing' => 'Servicing 7',
    			'phone' => '0000000007',
    			'website' => 'website 7',
    			'profilePhotoPath' => '/images/bg-logo.png',
    			'coverPhotoPath' => '/images/bg.jpg',
    			'followersCount' => 54,
    			'reviewsCount' => 45,
    			'rating' => 4.5,
    			'aboutUs' => 'Hey here we are talking about that what is business 7 is actually doing'
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
