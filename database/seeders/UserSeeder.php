<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $data = [
                    [
                        'name' => 'Admin',
                        'email' => 'admin@gmail.com',
                        'password' => bcrypt('12345678'),
                        'profile_photo_path' => 'default.png',
                    ]
            ];
        foreach($data as $user){
            User::create($user);
        }
    }
}
