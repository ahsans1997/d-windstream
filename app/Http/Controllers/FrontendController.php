<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\HomeSection;
use App\Models\News;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('index',[
            'departments' => Department::all(),
            'news' => News::where('featured', 2)->limit(4)->get(),
            'settings' => Setting::latest()->first(),
            'homesection' => HomeSection::latest()->first(),
        ]);
    }
    public function program()
    {
        return view('program');
    }


    public function department()
    {
        return view('department');
    }
    public function research()
    {
        return view('research');
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
