<?php

namespace App\Http\Controllers;

use App\Models\GoverningBody;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class GoverningBodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.governingbody.index',[
            'governingbodies' => GoverningBody::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.governingbody.create');
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
            'name' => 'required',
            'designation' => 'required',
            'institute' => 'required',
            'location' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $governingBody = new GoverningBody();
        $governingBody->name = $request->name;
        $governingBody->designation = $request->designation;
        $governingBody->institute = $request->institute;
        $governingBody->location = $request->location;
        $governingBody->position = $request->position;
        $governingBody->serial = $request->serial;
        $governingBody->save();
        if($request->hasFile('image'))
        {
            $governingBody->addMediaFromRequest('image')->toMediaCollection('governingbody');
        }
        Toastr::success('Governing Body Member Added Successfully', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GoverningBody  $governingBody
     * @return \Illuminate\Http\Response
     */
    public function show(GoverningBody $governingbody)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GoverningBody  $governingBody
     * @return \Illuminate\Http\Response
     */
    public function edit(GoverningBody $governingbody)
    {
        return view('admin.governingbody.edit',[
            'governingbody' => $governingbody,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GoverningBody  $governingBody
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoverningBody $governingbody)
    {
        $validated = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'institute' => 'required',
            'location' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $governingbody = GoverningBody::find($governingbody->id);
        $governingbody->name = $request->name;
        $governingbody->designation = $request->designation;
        $governingbody->institute = $request->institute;
        $governingbody->location = $request->location;
        $governingbody->position = $request->position;
        $governingbody->serial = $request->serial;
        $governingbody->save();
        if($request->hasFile('image'))
        {
            $governingbody->clearMediaCollection('governingbody');
            $governingbody->addMediaFromRequest('image')->toMediaCollection('governingbody');
        }
        Toastr::success('Governing Body Member Updated Successfully', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GoverningBody  $governingBody
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoverningBody $governingbody)
    {
        $governingbody = GoverningBody::find($governingbody->id);
        $governingbody->clearMediaCollection('governingbody');
        $governingbody->delete();
        Toastr::warning('Governing Body Member Deleted Successfully', 'Success');
        return back();
    }

    public function governingbody()
    {
        return view('governingbody',[
            'chairmans' => GoverningBody::where('position', 1)->orderBy('serial', 'asc')->get(),
            'members' => GoverningBody::where('position', 2)->orderBy('serial', 'asc')->get(),
            'secretarys' => GoverningBody::where('position', 3)->orderBy('serial', 'asc')->get(),
            'title' => 'The Governing Body',
        ]);
    }
}
