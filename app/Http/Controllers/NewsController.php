<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\News;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index',[
            'news' => News::with('category','department')->orderBy('id','desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create',[
            'categories' => Category::all(),
            'departments' => Department::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|unique:news',
            'description' => 'required',
            'department_id' => 'required',
            'category_id' => 'required',
            'image' => 'mimes:JPG,jpg,jpeg,png,gif,svg|max:10248',
        ]);
        $slug = Str::slug($request->title, '-') ;

        $news = new News();
        $news->title = $request->title;
        $news->description = $request->description;
        $news->department_id = $request->department_id;
        $news->category_id = $request->category_id;
        $news->slug = $slug;
        $news->meta_keywords = $request->meta_keywords;
        $news->meta_description = $request->meta_description;
        $news->created_at = Carbon::now();
        $news->save();


        if($request->hasFile('image')){
            $news->addMediaFromRequest('image')->toMediaCollection('news');
            $news->save();
        }
        if($request->hasFile('images')){
            foreach ($request->file('images') as $img) {
                $news->addMedia($img)->toMediaCollection('newses');
            }
        }
        return back()->with('success', 'News created successfull.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        // return view('admin.news.show',[
        //     'news' => News::findOrFail($news->id),
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',[
            'news' => News::findOrFail($news->id),
            'departments' => Department::all(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'department_id' => 'required',
            'category_id' => 'required',
            'slug' => 'required|unique:news,slug,'.$news->id,
            'image' => 'mimes:JPG,jpg,jpeg,png,gif,svg|max:10248',
        ]);
        $news = News::findOrFail($news->id);

         News::find($news->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'category_id' => $request->category_id,
            'slug' => Str::slug($request->slug, '-'),
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
         ]);


        if($request->hasFile('image')){

            $news->clearMediaCollection('news');

            $news->addMediaFromRequest('image')->toMediaCollection('news');
        }
        if($request->hasFile('images')){

            foreach ($news->getMedia('newses') as $img) {
                $news->clearMediaCollection('newses');
            }

            foreach ($request->file('images') as $img) {
                $news->addMedia($img)->toMediaCollection('newses');
            }
        }
        return back()->with('success', 'News update successfull.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news = News::findOrFail($news->id);
        $news->clearMediaCollection('news');
        foreach ($news->getMedia('newses') as $img) {
            $news->clearMediaCollection('newses');
        }
        $news->delete();
        return back()->with('delete', 'Your Department Delete Successfull.');
    }

    public function featured($id)
    {
        $news = News::findOrFail($id);
        if(News::findOrFail($id)->featured == 0){
            $news->featured = 1;
            $news->save();
        }
        else{
            $news->featured = 0;
            $news->save();
        }
        return back();
    }
    public function action($id)
    {
        $news = News::find($id);

        if(News::findOrFail($id)->action == 0)
        {
            $news->action = 1;
            $news->save();
        }
        else{
            $news->action = 0;
            $news->save();
        }
        return back();


    }

    public function news(){
        return view('news',[
            'news' => News::orderBy('id', 'DESC')->paginate(9),
            'title' => 'All News'
        ]);
    }
    public function newssingle($slug){

        $news_info = News::where('slug', $slug)->first();

        return view('news-single',[
            'news_info' => $news_info,
            'news' => News::orderBy('id', 'desc')->limit(3)->get(),
            'title' => 'Single News',
        ]);
    }


}
