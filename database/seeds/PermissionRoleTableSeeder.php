<?php

use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;


class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // All permissions
        $all_permissions = Permission::all();
        
        // Admin, all except listing_create, listing_edit, listing_delete, 
        $admin_permissions = $all_permissions->filter (function ($permission){
            return $permission->title!='listing_create' && $permission->title!='listing_edit'&& $permission->title!='listing_delete';
        }); 
        Role::findOrFail(1)->permissions()->sync($admin_permissions->pluck('id'));
        
        // User, only listings and profile
        $user_permissions = $all_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 8) == 'profile_' || substr($permission->title, 0, 8) == 'listing_';
        });

        Role::findOrFail(2)->permissions()->sync($user_permissions);
    }
}
