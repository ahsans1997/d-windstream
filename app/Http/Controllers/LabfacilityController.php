<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Labfacility;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LabfacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.labfacility.index',[
            'labfacilities' => Labfacility::with('department')->orderBy('id','desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.labfacility.create',[
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
            'title' => 'required|unique:labfacilities',
            'description' => 'required',
            'department_id' => 'required',
            'image' => 'mimes:JPG,jpg,jpeg,png,gif,svg|max:10248',
        ]);
        $slug = Str::slug($request->title, '-');
        $labfacility = new Labfacility();
        $labfacility->title = $request->title;
        $labfacility->description = $request->description;
        $labfacility->department_id = $request->department_id;
        $labfacility->slug = $slug;
        $labfacility->save();

        if($request->hasFile('image'))
        {
            $labfacility->addMediaFromRequest('image')->toMediaCollection('labfacility');
        }

        Toastr::success("Lab Facility Create succssfuly");
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Labfacility  $labfacility
     * @return \Illuminate\Http\Response
     */
    public function show(Labfacility $labfacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Labfacility  $labfacility
     * @return \Illuminate\Http\Response
     */
    public function edit(Labfacility $labfacility)
    {
        return view('admin.labfacility.edit',[
            'labfacility' => $labfacility,
            'departments' => Department::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Labfacility  $labfacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Labfacility $labfacility)
    {
        $validated = $request->validate([
            'title' => 'required|unique:labfacilities,title,'.$labfacility->id,
            'description' => 'required',
            'department_id' => 'required',
            'image' => 'mimes:JPG,jpg,jpeg,png,gif,svg|max:10248',
        ]);
        $slug = Str::slug($request->title, '-');
        $labfacility = Labfacility::find($labfacility->id);
        $labfacility->title = $request->title;
        $labfacility->description = $request->description;
        $labfacility->department_id = $request->department_id;
        $labfacility->slug = $slug;
        $labfacility->save();

        if($request->hasFile('image'))
        {
            $labfacility->clearMediaCollection('labfacility');
            $labfacility->addMediaFromRequest('image')->toMediaCollection('labfacility');
        }

        Toastr::success("Lab Facility Update succssfuly");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Labfacility  $labfacility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Labfacility $labfacility)
    {
        $labfacility = Labfacility::find($labfacility->id);
        $labfacility->clearMediaCollection('labfacility');
        $labfacility->delete();
    }
}
