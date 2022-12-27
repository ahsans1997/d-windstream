<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = [
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'10','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'11','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'12','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'13','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'14','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'11','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'10','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
            ['title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.','description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.','department_id'=>'13','slug'=>'event-title','datetime'=>Carbon::now(),'created_at'=>Carbon::now()],
        ];
        Event::insert($event);
    }
}
