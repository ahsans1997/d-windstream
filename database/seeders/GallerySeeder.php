<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::insert([
            'title' => 'Gallery',
            'created_at' => Carbon::now(),
        ]);
    }
}
