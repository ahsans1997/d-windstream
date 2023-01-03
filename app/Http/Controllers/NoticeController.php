<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Notice;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.notice.index',[
            'notices' => Notice::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create',[
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
            'title' => 'required',
            'description' => 'required',
            'department_id' => 'required',
        ]);
        $slug = Str::slug($request->title, '-');
        $notice_id = Notice::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'slug' => $slug,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'created_at' => Carbon::now(),
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $location = 'public/assets/images/notices/'.$image_name;
            Image::make($image)->save(base_path($location));
            Notice::findOrFail($notice_id)->update([
                'image' => $image_name,
            ]);
        }
        return back()->with('success', 'Notice created successfull.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function show(Notice $notice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function edit(Notice $notice)
    {
        return view('admin.notice.edit',[
            'notice' => Notice::findOrFail($notice->id),
            'departments' => Department::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notice $notice)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'department_id' => 'required',
            'slug' => 'required|unique:news,slug,'.$notice->id,
        ]);
        $slug = Str::slug($request->title, '-');
        Notice::findOrFail($notice->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'slug' => Str::slug($request->slug, '-'),
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'created_at' => Carbon::now(),
        ]);
        if($request->hasFile('image')){
            if(Notice::findOrFail($notice->id)->image != "default.png"){
                $location = 'public/assets/images/notices/'.Notice::findOrFail($notice->id)->image;
                unlink(base_path($location));
                Notice::findOrFail($notice->id)->update([
                    'image' => "default.png",
                ]);
            }
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $location = 'public/assets/images/notices/'.$image_name;
            Image::make($image)->save(base_path($location));
            Notice::findOrFail($notice->id)->update([
                'image' => $image_name,
            ]);
        }
        return redirect()->route('notice.index')->with('success', 'Notice update successfull.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notice  $notice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notice $notice)
    {
        if(Notice::findOrFail($notice->id)->image != "default,png")
        {
            $image_location = 'public/assets/images/notices/'.Notice::findOrFail($notice->id)->image;
            unlink(base_path($image_location));
        }
        Notice::findOrFail($notice->id)->delete();
        return back()->with('delete', 'Your Department Delete Successfull.');
    }

    public function notice($slug=null)
    {
        if ($slug == null) {
            $data = [
                'notices' => Notice::paginate(10),
                'title' => 'Notice'
            ];
            return view('notice.notice', $data);
        } else {

            $notice = Notice::where('slug', $slug)->first();

            if ($notice) {
                
                $title = 'Notice of ' . $notice->title;

                return view('notice.notice-single', [
                    'department' => $notice,
                    'title' => $title
                ]);
            } else {
                return abort(404);
            }
        }
    }

    public function noticeSearch(Request $request)
    {       
        $query = Notice::query();
        
        if($request->search){
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        if($request->from_date && $request->to_date){
            $query->whereBetween('created_at', [Carbon::parse($request->from_date), Carbon::parse($request->to_date)->addDay()]);
        }

        $notice = $query->paginate(10);        

        $data = [
            'notices' => $notice,
            'title_search' => 'Search Result'
        ];
        return view('notice.noticelist', $data);
    }
}
