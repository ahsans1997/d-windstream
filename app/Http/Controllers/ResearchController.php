<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Research;
use Carbon\Carbon;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.research.index',[
            'researches' => Research::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.research.create',[
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
            'title' => 'required|unique:research',
            'description' => 'required',
            'department_id' => 'required',
        ]);
        $slug = Str::slug($request->title, '-');
        $research_id = Research::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'slug' => $slug,
            'approve' => 1,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'created_at' => Carbon::now(),
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/research/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Research::findOrFail($research_id)->update([
                'image' => $image_name,
            ]);
        }
        return back()->with('success', 'Research add successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function show(Research $research)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit(Research $research)
    {
        return view('admin.research.edit',[
            'departments' => Department::all(),
            'research' => Research::findOrFail($research->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Research $research)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'department_id' => 'required',
        ]);
        $slug = Str::slug($request->title, '-');
        Research::findOrFail($research->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'slug' => $slug,
            'approve' => 1,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
        ]);

        if($request->hasFile('image')){
            if (Research::findOrFail($research->id)->image != "default.png") {
                $location = 'public/assets/images/research/'.Research::findOrFail($research->id)->image;
                unlink(base_path($location));
                Research::findOrFail($research->id)->update([
                    'image' => "default.png",
                ]);
            }
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $image_location = 'public/assets/images/research/'.$image_name;
            Image::make($image)->save(base_path($image_location));
            Research::findOrFail($research->id)->update([
                'image' => $image_name,
            ]);
        }
        return back()->with('success', 'Research edit successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy(Research $research)
    {
        if (Research::findOrFail($research->id)->image != "default.png"){
            $image_location = 'public/assets/images/research/'.Research::findOrFail($research->id)->image;
            unlink(base_path($image_location));
        }
        if (Research::findOrFail($research->id)->file != ""){
            Storage::delete(Research::findOrFail($research->id)->file);
        }
        Research::findOrFail($research->id)->delete();
        return back()->with('delete', 'delete complete');
    }
}
