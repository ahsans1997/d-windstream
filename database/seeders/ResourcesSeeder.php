<?php

namespace Database\Seeders;

use App\Models\Resources;
use Illuminate\Database\Seeder;

class ResourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'boys' => 'test',
            'girls' => 'test',
            'medical' => 'test',
            'library' => 'test',
            'cafe' => 'test',
        ];
        Resources::create($data);
    }

}
