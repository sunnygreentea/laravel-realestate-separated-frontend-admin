<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;
use Faker\Factory as Faker;
use App\Listing;
use App\City;
use App\Propertytype;
use App\User;

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

        for ($i=1; $i<=10; $i++) {
            
            // make listing id 1,3,5 featured
            if($i==1 || $i==3 || $i==5) {
                $is_featured = 1;
            }
            else  $is_featured= 0;
            
            $listing = Listing::create([
                'id'                => $i,
                'name'              => $faker->word.' '.$faker->word,
                'user_id'           => User::whereNotIn('id', array(1, 2))->get()->random(1)->first()->id,
                'ptype_id'          => Propertytype::all()->random(1)->first()->id,
                'city_id'           => City::all()->random(1)->first()->id,
                'is_featured'       => $is_featured,
                'price'             => rand(500000, 1000000),
                'beds'              => rand(3, 6),
                'baths'             => rand(2, 4),
                'garage'            => rand(1, 3),
                'area'              => rand(200, 500),
                'amenties'          => $faker->paragraph,
                'description'       => $faker->paragraph.' '.$faker->paragraph,
                'lat'               => rand(-20, 20),
                'lng'               => rand(-20, 20),
            ]);

        }
        
    }
}
