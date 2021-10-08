<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        User::create([
           'name' => 'Lucas Santos',
           'email' => 'lucas@gmail.com',
           'password' => bcrypt('12345678')
        ]);
    }
}
