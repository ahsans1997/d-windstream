<?php

namespace Database\Seeders;

use App\Models\News;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $news = [
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'4','slug'=>'news-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'5','slug'=>'news-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'6','slug'=>'news-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'7','slug'=>'news-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'4','slug'=>'news-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'5','slug'=>'news-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'6','slug'=>'news-title','created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>rand(1,5),'category_id'=>'7','slug'=>'news-title','created_at'=>Carbon::now()],
        ];
        News::insert($news);
    }
}
