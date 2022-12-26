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
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'10','slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'11','slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'12','slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'13','slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'14','slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'11','slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'10','slug'=>'research-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'13','slug'=>'research-title','created_at'=>Carbon::now()],
        ];
        Research::insert($news);
    }
}
