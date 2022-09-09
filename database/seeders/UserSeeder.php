<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $user = User::whereRole(1)->first();
        if(!isset($user))
        {
            User::create([
                'name' => 'admin',
                'email' => 'khubaib@zymok.com',
                'phone' => null,
                'role' => 1,
                'password' => bcrypt(123456)
            ]);
        }
    }
}
