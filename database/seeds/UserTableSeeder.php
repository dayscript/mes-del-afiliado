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
        $user->first_name = 'Nicolas';
        $user->last_name = 'Troncoso';
        $user->identification = '123456789';
        $user->city = '';
        $user->affiliate_time = '';
        $user->email = 'nicolas.troncoso@grupolaestacion.com';
        $user->phone = '';
        $user->mobile = '';
        $user->dependence = '';
        $user->children = '';
        $user->number_children = '';
        $user->car = '';
        $user->api_token = str_random(50);
        $user->password = bcrypt('nicolas.troncoso');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
