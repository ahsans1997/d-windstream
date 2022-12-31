<?php

namespace Database\Seeders;

use App\Models\Research;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResearchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $news = [
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'slug'=>'research-title','created_at'=>Carbon::now()],
        ];
        Research::insert($news);
    }
}
