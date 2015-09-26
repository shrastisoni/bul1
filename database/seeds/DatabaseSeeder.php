<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\UserDetail;
use App\Business;

class DatabaseSeeder extends Seeder 
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		// User::truncate();
		// UserDetail::truncate();
		// Business::truncate();

		$this->call('UserTableSeeder');
	}
}

class UserTableSeeder extends Seeder 
{

    public function run()  
    {
        $faker = Faker\Factory::create();

        for ($i=1; $i <= 100; $i++) 
        {  
            DB::table('users')->insert(
                [
                'userName' => str_replace('.', '_', $faker->unique()->userName),  
                'email' => $faker->email,  
                'password' => bcrypt('password'),  
                'state' => 'active',
                'roleId' => 1,
                'passwordEpochUpdatedAt' => time(),
                'created_at' => time(),
                'updated_at' => time()
                ]
            );
            DB::table('businesses')->insert(
    			[
    			'name' => $faker->company,
    			'type' => $faker->catchPhrase,
    			'about' => 'We are '.$faker->company.' '.$faker->companySuffix.'. We\'re working '.$faker->bs.'.',
    			'phone' => $faker->phoneNumber,
    			'website' => $faker->domainName,
    			'serviceCoverage' => 'Servicing '.$i,
    			'created_at' => time(),
    			'updated_at' => time()
    			]
			); 
			DB::table('userDetails')->insert(
    			[
    			'userId' => $i,
    			'name' => $faker->name,
    			'location' => $faker->streetAddress,
    			'profilePicPath' => '/images/bg-logo.png',
    			'coverPicPath' => '/images/bg.jpg',
    			'about' => Faker\Provider\Lorem::sentence($nbWords = 30),
    			'type' => Faker\Provider\Lorem::sentence($nbWords = 2),
    			'businessId' => $i
    			]
			);
        }
        DB::table('photoAlbums')->insert(
    			[
    			'user_id' => 1, 
    			'type' => 'album',
    			'name' => 'Album 1',
    			'path' => '/images/photos-1.png',
    			'active' => TRUE,
    			'linkWith' => 2,
    			'about' => 'Horse Trading & Farming 1',
    			'created_at' => time(),
    			'updated_at' => time()
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
    			'created_at' => time(),
    			'updated_at' => time()
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
    			'created_at' => time(),
    			'updated_at' => time()
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
    			'created_at' => time(),
    			'updated_at' => time()
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
    			'created_at' => time(),
    			'updated_at' => time()
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
    			'created_at' => time(),
    			'updated_at' => time()
    			]
		);
    }
}  
