<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\News;
use App\Models\Page;
use App\Models\Event;
use App\Models\Setting;
use App\Models\Department;
use App\Models\HomeSection;
use App\Models\Research;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home($slug = null)
    {

        if ($slug) {

            $page = Page::where('slug', $slug)->where('status','Active')->first();

            if ($page) {

                if($page->redirect == 1 && $page->redirect_url != null)
                    return redirect($page->redirect_url
                );

                return view('page', [
                    'page' => $page,
                    'title' => $page->title
                ]);
            } else {
                return abort(404);
            }

        } else {
            $news1 = News::where('featured', 1)->first();
            if(isset($news1->id)){
                $news2 = News::where('featured', 1)->where('id', '<>', $news1->id)->first();
            }
            else{
                $news2 = News::where('featured', 1)->first();
            }
            if(isset($news1->id) && isset($news2->id)){
                $news = News::where('featured', 1)->where('id', '<>', [$news1->id,$news2->id])->orderby('id', 'desc')->limit(4)->get();
            }
            else{
                $news = News::where('featured', 1)->orderby('id', 'desc')->limit(4)->get();
            }

            return view('index', [
                'departments' => Department::all(),
                'news' => $news,
                'news1' => $news1,
                'news2' => $news2,
                'events' => Event::where('featured', 2)->limit(4)->get(),
                'researches' => Research::orderBy('id', 'desc')->limit(4)->get(),
                'settings' => Setting::latest()->first(),
                'homesection' => HomeSection::latest()->first(),
                'messagefromchairman' => About::find(1),

            ]);
        }
    }
}
