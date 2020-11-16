<?php

use Illuminate\Database\Seeder;

use App\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // ------------------------------------------
            // Only for admin
            // ------------------------------------------
            [
                'id'    => '1',
                'title' => 'user_management_access',
            ],
            [
                'id'    => '2',
                'title' => 'permission_create',
            ],
            [
                'id'    => '3',
                'title' => 'permission_edit',
            ],
            [
                'id'    => '4',
                'title' => 'permission_show',
            ],
            [
                'id'    => '5',
                'title' => 'permission_delete',
            ],
            [
                'id'    => '6',
                'title' => 'permission_access',
            ],
            [
                'id'    => '7',
                'title' => 'role_create',
            ],
            [
                'id'    => '8',
                'title' => 'role_edit',
            ],
            [
                'id'    => '9',
                'title' => 'role_show',
            ],
            [
                'id'    => '10',
                'title' => 'role_delete',
            ],
            [
                'id'    => '11',
                'title' => 'role_access',
            ],
            [
                'id'    => '12',
                'title' => 'user_create',
            ],
            [
                'id'    => '13',
                'title' => 'user_edit',
            ],
            [
                'id'    => '14',
                'title' => 'user_show',
            ],
            [
                'id'    => '15',
                'title' => 'user_delete',
            ],
            [
                'id'    => '16',
                'title' => 'user_access',
            ],

            // ------------------------------------------
            // For both admin and user
            // ------------------------------------------
            [
                'id'    => '17',
                'title' => 'profile_password_edit',
            ],


            // -----------------------------------------------
            // Extra
            // -----------------------------------------------
            // countries
            [
                'id'    => '18',
                'title' => 'country_create',
            ],
            [
                'id'    => '19',
                'title' => 'country_edit',
            ],
            [
                'id'    => '20',
                'title' => 'country_show',
            ],
            [
                'id'    => '21',
                'title' => 'country_delete',
            ],
            [
                'id'    => '22',
                'title' => 'country_access',
            ],

            // cities
            [
                'id'    => '23',
                'title' => 'city_create',
            ],
            [
                'id'    => '24',
                'title' => 'city_edit',
            ],
            [
                'id'    => '25',
                'title' => 'city_show',
            ],
            [
                'id'    => '26',
                'title' => 'city_delete',
            ],
            [
                'id'    => '27',
                'title' => 'city_access',
            ],
           
            // property types
            [
                'id'    => '28',
                'title' => 'type_create',
            ],
            [
                'id'    => '29',
                'title' => 'type_edit',
            ],
            [
                'id'    => '30',
                'title' => 'type_show',
            ],
            [
                'id'    => '31',
                'title' => 'type_delete',
            ],
            [
                'id'    => '32',
                'title' => 'type_access',
            ],

            // transactions
            [
                'id'    => '33',
                'title' => 'transaction_create',
            ],
            [
                'id'    => '34',
                'title' => 'transaction_edit',
            ],
            [
                'id'    => '35',
                'title' => 'transaction_show',
            ],
            [
                'id'    => '36',
                'title' => 'transaction_delete',
            ],
            [
                'id'    => '37',
                'title' => 'transaction_access',
            ],
            
            // listings
            [
                'id'    => '38',
                'title' => 'listing_create',
            ],
            [
                'id'    => '39',
                'title' => 'listing_edit',
            ],
            [
                'id'    => '40',
                'title' => 'listing_show',
            ],
            [
                'id'    => '41',
                'title' => 'listing_delete',
            ],
            [
                'id'    => '42',
                'title' => 'listing_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
