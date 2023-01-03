<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Event;
use App\Models\HomeSection;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        // $news1 = News::where('action', 2)->first();
        // dd($news1);

        return view('index',[
            'departments' => Department::all(),
            'news' => News::where('featured', 1)->limit(6)->get(),
            'events' => Event::where('featured', 2)->limit(4)->get(),
            'researches' => Event::orderBy('id', 'desc')->limit(4)->get(),
            'settings' => Setting::latest()->first(),
            'homesection' => HomeSection::latest()->first(),
        ]);
    }

    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}
