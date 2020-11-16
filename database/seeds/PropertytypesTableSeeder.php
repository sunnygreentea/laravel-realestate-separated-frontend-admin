<?php

use Illuminate\Database\Seeder;
use App\Propertytype;

class PropertytypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ptypes = [
            [
                'id'         => 1,
                'name'       => 'House',
            ],
            [
                'id'         => 2,
                'name'       => 'Condo',
            ],
            
        ];

        Propertytype::insert($ptypes);
    }
}
