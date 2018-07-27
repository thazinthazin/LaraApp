<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'display-role',
                'display_name' => 'View Role List',
                'description' => 'Can View All Role'
            ],
            [
                'name' => 'create-role',
                'display_name' => 'Create Role',
                'description' => 'Can Create New Role'
            ],
            [
                'name' => 'edit-role',
                'display_name' => 'Edit Role',
                'description' => 'Can Edit Role'
            ],
            [
                'name' => 'delete-role',
                'display_name' => 'Delete Role',
                'description' => 'Can Delete Role'
            ],

            [
                'name' => 'display-user',
                'display_name' => 'View User List',
                'description' => 'Can View All User'
            ],
            [
                'name' => 'create-user',
                'display_name' => 'Create User',
                'description' => 'Can Create New User'
            ],
            [
                'name' => 'edit-user',
                'display_name' => 'Edit User',
                'description' => 'Can Edit User'
            ],
            [
                'name' => 'delete-user',
                'display_name' => 'Delete User',
                'description' => 'Can Delete User'
            ]
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }
    }
}
