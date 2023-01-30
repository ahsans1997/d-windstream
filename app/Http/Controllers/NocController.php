<?php

namespace App\Http\Controllers;

use App\Models\Noc;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.noc.index',[
           'nocs' => Noc::orderBy('id', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.noc.create');
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
            'file' => 'mimes:pdf,doc,docx|max:2048',
        ]);
        $noc = new Noc();
        $noc->title = $request->title;
        $noc->slug = Str::slug($request->title, '-');
        if($request->hasFile('file')){
            $path = Storage::putFile('file', $request->file('file'));
            $noc->file = $path;
        }
        $noc->save();
        Toastr::success('Noc Added Successfully', 'Success');
        return redirect()->route('noc.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Noc  $noc
     * @return \Illuminate\Http\Response
     */
    public function show(Noc $noc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Noc  $noc
     * @return \Illuminate\Http\Response
     */
    public function edit(Noc $noc)
    {
        return view('admin.noc.edit',[
            'noc' => $noc,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Noc  $noc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Noc $noc)
    {
        $valadated = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:nocs,slug,'.$noc->id,
            'file' => 'mimes:pdf,doc,docx|max:2048,',
        ]);
        $noc = Noc::find($noc->id);
        $noc->title = $request->title;
        $noc->slug = Str::slug($request->slug, '-');
        if($request->hasFile('file')){
            $path = Storage::putFile('file', $request->file('file'));
            $noc->file = $path;
        }
        $noc->save();
        Toastr::success('Noc Updated Successfully', 'Success');
        return redirect()->route('noc.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Noc  $noc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Noc $noc)
    {
        $noc = Noc::find($noc->id);
        $noc->delete();
        Toastr::warning('Noc Deleted Successfully', 'Success');
        return redirect()->route('noc.index');
    }

    public function noc()
    {
        return view('noc',[
            'nocs' => Noc::orderBy('id', 'desc')->paginate(10),
        ]);
    }

    public function download($slug){
        $noc = Noc::where('slug', $slug)->first();
        return Storage::download($noc->file);
    }
}
