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
        ]);
        $slug = Str::slug($request->title, '-') ;
        $news_id = News::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'category_id' => $request->category_id,
            'slug' => $slug,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'created_at' => Carbon::now(),
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $location = 'public/assets/images/news/'.$image_name;
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
            'slug' => 'required|unique:news'
        ]);

         News::find($news->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'category_id' => $request->category_id,
            'slug' => $request->slug,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
         ]);

        if ($request->hasFile('image')) {
            if(News::findOrFail($news->id)->image != "default.png"){
                $location = 'public/assets/images/news/'.News::findOrFail($news->id)->image;
                unlink(base_path($location));
                News::findOrFail($news->id)->update([
                    'image' => "default.png",
                ]);
            }
            $image = $request->file('image');
            $image_name = Str::slug($request->title, '-').".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/news/'.$image_name;
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
        if(News::findOrFail($news->id)->image != "default,png")
        {
            $image_location = 'public/assets/images/news/'.News::findOrFail($news->id)->image;
            unlink(base_path($image_location));
        }
        News::findOrFail($news->id)->delete();
        return back()->with('delete', 'Your Department Delete Successfull.');
    }

    public function featured($id)
    {
        if(News::findOrFail($id)->featured == 1){
            News::findOrFail($id)->update([
                'featured' => 2,
            ]);
        }
        else{
            News::findOrFail($id)->update([
                'featured' => 1,
            ]);
        }
        return back();
    }

    public function news(){
        return view('news',[
            'news' => News::orderBy('id', 'DESC')->simplePaginate(9),
        ]);
    }
    public function newssingle($slug){
        return view('news-single',[
            'news_info' => News::where('slug', $slug)->first(),
            'news' => News::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }


}
