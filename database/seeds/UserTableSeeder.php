<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'dayscript';
        $user->identification = '1032451235';
        $user->city = '';
        $user->affiliate_time = '';
        $user->email = 'cvillamil@dayscript.com';
        $user->phone = '';
        $user->mobile = '';
        $user->dependence = '';
        $user->children = '';
        $user->number_children = '';
        $user->car = '';
        $user->api_token = str_random(50);
        $user->password = bcrypt('p0p01234');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
