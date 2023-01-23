<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'historicaloverview' => 'test',
            'mission' => 'test',
            'vision' => 'test',
            'cname' => 'test',
            'messagefromchairman' => 'test',
            'pname' => 'test',
            'messagefromprincipal' => 'test',
        ];

        About::create($data);
    }
}
