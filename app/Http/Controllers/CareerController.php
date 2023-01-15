<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.careers.index',[
           'careers' => Career::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valadated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'file' => 'mimes:pdf,doc,docx|max:2048',
        ]);
        $career = new Career();
        $career->title = $request->title;
        $career->description = $request->description;
        $career->date_start = $request->date_start;
        $career->date_end = $request->date_end;
        $career->slug = Str::slug($request->title, '-');

        if($request->hasFile('file')){
            $path = Storage::putFile('file', $request->file('file'));
            $career->file = $path;
        }
        $career->save();
        Toastr::success('Career Successfully Added', 'Success');
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function show(Career $career)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function edit(Career $career)
    {
        return view('admin.careers.edit',[
            'career' => $career,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Career $career)
    {
        $valadated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'file' => 'mimes:pdf,doc,docx|max:2048',
        ]);
        $career = Career::find($career->id);
        $career->title = $request->title;
        $career->description = $request->description;
        $career->date_start = $request->date_start;
        $career->date_end = $request->date_end;
        $career->slug = Str::slug($request->title, '-');

        if($request->hasFile('file')){
            $path = Storage::putFile('file', $request->file('file'));
            $career->file = $path;
        }
        $career->save();
        Toastr::success('Career Successfully Update', 'Success');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Career  $career
     * @return \Illuminate\Http\Response
     */
    public function destroy(Career $career)
    {
        $career = Career::find($career->id);
        $career->delete();
        Toastr::warning('Career Successfully Deleted', 'Success');
        return back();
    }

    public function career($slug = null)
    {
        if($slug == null){
            $career = Career::latest()->paginate(10);
            return view('career.career',[
                'careers' => $career,
                'title' => 'Career',
            ]);
        }else{
            $career = Career::where('slug', $slug)->first();
            $careers = Career::latest()->paginate(5);
            return view('career.single-career',[
                'career' => $career,
                'careers' => $careers,
                'title' => $career->title,
            ]);
        }
    }

    public function download($slug)
    {
        $career = Career::where('slug', $slug)->first();
        return Storage::download($career->file);
    }
}
