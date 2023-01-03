<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoticeSeeder extends Seeder
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
                'title' => 'Notice 1',
                'description' => 'Notice 1 description',
                'department_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.png',
                'slug' => 'notice-1',
            ], [
                'title' => 'Notice 2',
                'description' => 'Notice 2 description',
                'department_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.png',
                'slug' => 'notice-2',
            ], [
                'title' => 'Notice 3',
                'description' => 'Notice 3 description',
                'department_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.png',
                'slug' => 'notice-3',
            ], [
                'title' => 'Notice 4',
                'description' => 'Notice 4 description',
                'department_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.png',
                'slug' => 'notice-4',
            ], [
                'title' => 'Notice 5',
                'description' => 'Notice 5 description',
                'department_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
                'image' => 'default.png',
                'slug' => 'notice-5',
            ]
        ];


        Notice::insert($data);
    }
}
