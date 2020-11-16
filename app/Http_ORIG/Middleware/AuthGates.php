<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Gate;

class AuthGates
{
    /*
    * Check if the current loggedin user has the right permissions
    * Different role has different permissions
    * 
    * Define gates
    * return gate: name: country_create value: >=1 or false
    */
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();

        if ($user) {
            // -------------------------------
            // Get roles, including permissions
            /*
            Array
            (
                [0] => Array
                    (
                        [id] => 1
                        [title] => Admin
                        [created_at] => 
                        [updated_at] => 
                        [deleted_at] => 
                        [permissions] => Array
                            (
                                [0] => Array
                                    (
                                        [id] => 1
                                        [title] => user_management_access
                                        [created_at] => 
                                        [updated_at] => 
                                        [deleted_at] => 
                                        [pivot] => Array
                                            (
                                                [role_id] => 1
                                                [permission_id] => 1
                                            )
                                    )

                                [1] => Array
                                    (
                                        [id] => 2
                                        [title] => permission_create
                                        [created_at] => 
                                        [updated_at] => 
                                        [deleted_at] => 
                                        [pivot] => Array
                                            (
                                                [role_id] => 1
                                                [permission_id] => 2
                                            )

                                    )
                                    ....

                                )
                            )
            */
            $roles            = Role::with('permissions')->get();
            //print_r($roles->toArray());
            
            // -------------------------------
            // Permissions 
            // Get all permissions from roles array, each permission with subarray of role ids
            /*
            Array
            (
                [user_management_access] => Array
                    (
                        [0] => 1
                    )

                [user_access] => Array
                    (
                        [0] => 1
                    )

                [country_create] => Array
                    (
                        [0] => 1
                        [1] => 2
                    )
                    ...
                )
            */
            $permissionsArray = [];

            foreach ($roles as $role) {
                foreach ($role->permissions as $permissions) {
                    $permissionsArray[$permissions->title][] = $role->id;
                }
            }
            //print_r($permissionsArray);

            // -----------------------------------------
            // Gate
            // Defines if user has permissions, based on user's roles and $permissionsArray
            // For each permission, if user's roles are included in array $roles, then user has this permission, otherwise not
            foreach ($permissionsArray as $title => $roles) {
                //echo "<br>gate";
                // get user's roles (array of ids)
                //print_r($user->roles->pluck('id')->toArray()); 

                // get matched roles
                //print_r(array_intersect($user->roles->pluck('id')->toArray(), $roles));

                Gate::define($title, function (\App\User $user) use ($roles) {
                    //print_r(array_intersect($user->roles->pluck('id')->toArray(), $roles));
                    //return >=1 or false 
                    return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                });
            }
        }
        
        return $next($request);
    }
}
