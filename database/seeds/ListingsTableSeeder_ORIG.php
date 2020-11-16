<?php

use Illuminate\Database\Seeder;
use App\Listing;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $listings = [
            [
                'id' 				=> 1,
                'name'       		=> '304 Blaster Up',
                'user_id' 			=> 3,
                'transaction_id' 	=> 1,
                'ptype_id' 			=> 1,
                'city_id' 			=> 4,
                'price'				=> 500000,
                'per'				=> '',
                'beds' 				=> 3,
                'baths' 			=> 2,
                'garage' 			=> 2,
                'area'				=> '340 sqm',
                'amenties'          => $faker->paragraph,
                'description'       => $faker->paragraph.' '.$faker->paragraph,
                'lat'               => rand(-20, 20),
                'lng'               => rand(-20, 20),
            ],

            [
                'id' 				=> 2,
                'name'       		=> '5780 Lakeshore Home',
                'user_id' 			=> 3,
                'transaction_id' 	=> 1,
                'ptype_id' 			=> 1,
                'city_id' 			=> 4,
                'price'				=> 590000,
                'per'				=> '',
                'beds' 				=> 4,
                'baths' 			=> 2,
                'garage' 			=> 1,
                'area'				=> '380 sqm',
                'amenties'          => $faker->paragraph,
                'description'       => $faker->paragraph.' '.$faker->paragraph,
                'lat'               => rand(-20, 20),
                'lng'               => rand(-20, 20),
            ],

            [
                'id' 				=> 3,
                'name'       		=> 'Beautiful Condo for rent',
                'user_id' 			=> 3,
                'transaction_id' 	=> 2,
                'ptype_id'			=> 2,
                'city_id' 			=> 1,
                'price'				=> 4500,
                'per'				=> 'Month',
                'beds' 				=> 3,
                'baths' 			=> 2,
                'garage' 			=> 1,
                'area'				=> '300 sqm',
                'amenties'          => $faker->paragraph,
                'description'       => $faker->paragraph.' '.$faker->paragraph,
                'lat'               => rand(-20, 20),
                'lng'               => rand(-20, 20),
            ],

            [
                'id' 				=> 4,
                'name'       		=> 'New House for sale',
                'user_id' 			=> 4,
                'transaction_id' 	=> 1,
                'ptype_id' 			=> 1,
                'city_id' 			=> 2,
                'price'				=> 890000,
                'per'				=> '',
                'beds' 				=> 4,
                'baths' 			=> 3,
                'garage' 			=> 2,
                'area'				=> '400 sqm',
                'amenties'          => $faker->paragraph,
                'description'       => $faker->paragraph.' '.$faker->paragraph,
                'lat'               => rand(-20, 20),
                'lng'               => rand(-20, 20),
            ],

            [
                'id' 				=> 5,
                'name'       		=> 'Lakeview Condo, just for you',
                'user_id' 			=> 4,
                'transaction_id' 	=> 2,
                'ptype_id'			=> 2,
                'city_id' 			=> 2,
                'price'				=> 4900,
                'per'				=> 'Month',
                'beds' 				=> 4,
                'baths' 			=> 3,
                'garage' 			=> 2,
                'area'				=> '320 sqm',
                'amenties' 			=> $faker->paragraph,
                'description'       => $faker->paragraph.' '.$faker->paragraph,
                'lat'               => rand(-20, 20),
                'lng'               => rand(-20, 20),
            ],

            [
                'id' 				=> 6,
                'name'       		=> '215 Mount Olive',
                'user_id' 			=> 5,
                'transaction_id' 	=> 1,
                'ptype_id' 			=> 2,
                'city_id' 			=> 8,
                'price'				=> 680000,
                'per'				=> '',
                'beds' 				=> 4,
                'baths' 			=> 3,
                'garage' 			=> 2,
                'area'				=> '420 sqm',
                'amenties'          => $faker->paragraph,
                'description'       => $faker->paragraph.' '.$faker->paragraph,
                'lat'               => rand(-20, 20),
                'lng'               => rand(-20, 20),
            ],
        ];

        Listing::insert($listings);
    }
}
