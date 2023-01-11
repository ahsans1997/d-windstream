<?php

namespace App\Http\Controllers;

use App\Models\Club;
use App\Models\Department;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.club.index',[
            'clubs' => Club::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.club.create',[
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
            'name' => 'required|unique:clubs',
            'description' => 'required',
            'department_id' => 'required',
        ]);
        $club = new Club();
        $club->name = $request->name;
        $club->description = $request->description;
        $club->department_id = $request->department_id;
        $club->slug = Str::slug($request->name, '-');
        $club->meta_keywords = $request->meta_keywords;
        $club->meta_description = $request->meta_description;
        $club->save();

        if($request->hasFile('image')){
            $club->addMediaFromRequest('image')->toMediaCollection('club');
        }

        Toastr::success('Club Successfully Created', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        return view('admin.club.edit',[
            'club' => $club,
            'departments' => Department::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        $validated = $request->validate([
            'name' => 'required|unique:clubs,name,'.$club->id,
            'description' => 'required',
            'department_id' => 'required',
        ]);
        $club = Club::find($club->id);
        $club->name = $request->name;
        $club->description = $request->description;
        $club->department_id = $request->department_id;
        $club->slug = Str::slug($request->name, '-');
        $club->meta_keywords = $request->meta_keywords;
        $club->meta_description = $request->meta_description;
        $club->save();

        if($request->hasFile('image')){
            $club->clearMediaCollection('club');
            $club->addMediaFromRequest('image')->toMediaCollection('club');
        }

        Toastr::success('Club Successfully Update', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $club = Club::find($club->id);
        $club->clearMediaCollection('club');
        $club->delete();
        Toastr::warning('Club Successfully Deleted', 'Success');
        return back();
    }
}
