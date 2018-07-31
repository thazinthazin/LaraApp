<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Permission;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->delete();

        $role = [
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Can Access All Permissions'
        ];

        $role = Role::create($role);

        $permissions = Permission::get();
        foreach ($permissions as $permission) {
            $role->attachPermission($permission);
        }

        $user = [
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456')
        ];
        $user = User::create($user);

        $user->attachRole($role);
    }
}
