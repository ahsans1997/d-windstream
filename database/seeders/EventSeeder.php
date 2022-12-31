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
            [
                'title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.',
                'department_id'=>rand(1,5),
                'slug'=>'event-title-1',
                'datetime'=>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
            [
                'title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.',
                'department_id'=>rand(1,5),
                'slug'=>'event-title-2',
                'datetime'=>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
            [
                'title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.',
                'department_id'=>rand(1,5),
                'slug'=>'event-title-3',
                'datetime'=>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
            [
                'title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.',
                'department_id'=>rand(1,5),
                'slug'=>'event-title-4',
                'datetime'=>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
            [
                'title'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'description'=>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad cupiditate debitis atque nisi quidem harum. Beatae accusamus architecto commodi maiores animi vero culpa alias ipsum quibusdam numquam tenetur, unde magni.',
                'department_id'=>rand(1,5),
                'slug'=>'event-title-5',
                'datetime'=>Carbon::now(),
                'created_at'=>Carbon::now()
            ],
          ];
        Event::insert($event);
    }
}
