<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\News;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('index',[
            'departments' => Department::all(),
            'news' => News::where('featured', 2)->limit(4)->get(),
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
