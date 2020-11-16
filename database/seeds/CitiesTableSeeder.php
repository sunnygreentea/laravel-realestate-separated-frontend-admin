<?php

use Illuminate\Database\Seeder;

use App\City;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'id'         => 1,
                'name'       => 'Toronto',
            ],
            [
                'id'         => 2,
                'name'       => 'Montreal',
            ],
            [
                'id'         => 3,
                'name'       => 'Calgary',
            ],
            [
                'id'         => 4,
                'name'       => 'Ottawa',
            ],
            [
                'id'         => 5,
                'name'       => 'Vancouver',
            ],
            [
                'id'         => 6,
                'name'       => 'Surrey',
            ],
            [
                'id'         => 7,
                'name'       => 'Edmonton',
            ],
            [
                'id'         => 8,
                'name'       => 'Mississauga',
            ],
            [
                'id'         => 9,
                'name'       => 'Quebec',
            ],
            [
                'id'         => 10,
                'name'       => 'Hamilton',
            ],

        ];

        City::insert($cities);
    }
}
