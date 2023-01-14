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
            'image' => 'mimes:JPG,jpg,jpeg,png,gif,svg|max:10248',
        ]);
        $slug = Str::slug($request->title, '-');
        $research = new Research();
        $research->title = $request->title;
        $research->description = $request->description;
        $research->department_id = $request->department_id;
        $research->slug = $slug;
        $research->approve = 1;
        $research->meta_keywords = $request->meta_keywords;
        $research->meta_description = $request->meta_description;
        $research->created_at = Carbon::now();
        $research->save();

        if($request->hasFile('image')){
            $research->addMediaFromRequest('image')->toMediaCollection('research');
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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10248',
        ]);
        $slug = Str::slug($request->title, '-');
        $research = Research::findOrFail($research->id);
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
            $research->clearMediaCollection('research');
            $research->addMediaFromRequest('image')->toMediaCollection('research');
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
        $research = Research::findOrFail($research->id);
        $research->clearMediaCollection('research');
        $research->delete();
        return back()->with('delete', 'delete complete');
    }

    public function research($slug = null)
    {
        if ($slug == null)
        {
            return view('research.research',[
                'researches' => Research::paginate(10),
                'title' => 'Research',
            ]);
        }
        else
        {
            $research = Research::where('slug', $slug)->first();
            if($research)
            {
                return view('research.research-single',[
                    'title' => 'Research of '.$research->title,
                    'research' => $research,
                    'researchs' => Research::limit(4)->get(),
                ]);
            }
        }

    }
    public function researchsearch(Request $request)
    {
        $search = $request->search;
        return view('research.researchlist',[
            'researches' => Research::where('title', 'like', '%'.$search.'%')->paginate(6),
            'title_search' => 'Search Research',
        ]);
    }
}
