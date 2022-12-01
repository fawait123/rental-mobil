<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=> 'superadmin',
            'name'=>'Super Admin',
            'email'=>'superadmin@example.com',
            'display_name'=>'Super Admin',
            'telp'=>'08xxxxxx',
            'role'=>'admin',
            'password'=>Hash::make('superadmin')
        ]);
    }
}
