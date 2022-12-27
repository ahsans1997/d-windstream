<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name'=>'Entertainment','created_at'=>Carbon::now()],
            ['name'=>'Political','created_at'=>Carbon::now()],
            ['name'=>'Business','created_at'=>Carbon::now()],
            ['name'=>'Sports','created_at'=>Carbon::now()],
        ];
        Category::insert($category);
    }
}
