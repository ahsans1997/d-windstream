<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Department;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
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
            'news' => News::with('category','department')->get(),
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
        ]);
        $slug = Str::slug($request->title, '-') ;
        $news_id = News::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'category_id' => $request->category_id,
            'slug' => $slug,
            'created_at' => Carbon::now(),
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $location = 'public/assets/uploads/news/'.$image_name;
            Image::make($image)->save(base_path($location));
            News::findOrFail($news_id)->update([
                'image' => $image_name,
            ]);
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
        //
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
        ]);
        $slug = Str::slug($request->title, '-') ;
         News::find($news->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'category_id' => $request->category_id,
            'slug' => $slug,
         ]);
        if($request->hasFile('image') != "default.png"){
            $image = News::findOrFail($news->id)->image;
            $location = 'public/assets/uploads/news/'.$image;
            unlink(base_path($location));
            News::findOrFail($news->id)->update([
                'image' => "default.png",
            ]);
        }
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/uploads/news/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            News::findOrFail($news->id)->update([
                'image' => $image_name,
            ]);
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
        if(News::findOrFail($news->id) != "default,png")
        {
            $image_location = 'public/assets/uploads/news/'.News::findOrFail($news->id)->image;
            unlink(base_path($image_location));
        }
        News::findOrFail($news->id)->delete();
        return back()->with('delete', 'Your Department Delete Successfull.');
    }
}
