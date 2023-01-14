<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.offices.index',[
            'offices' => Office::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offices.create');
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
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $offices = new Office();
        $offices->name = $request->name;
        $offices->description = $request->description;
        $offices->address = $request->address;
        $offices->phone = $request->phone;
        $offices->slug = Str::slug($request->name, '-');
        $offices->meta_keywords = $request->meta_keywords;
        $offices->meta_description = $request->meta_description;
        $offices->save();
        if ($request->hasFile('image'))
        {
            $offices->addMediaFromRequest('image')->toMediaCollection('offices');
        }
        Toastr::success('Office successfully added');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office)
    {
        return view('admin.offices.edit',[
            'office' => $office,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Office $office)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $office = Office::find($office->id);
        $office->name = $request->name;
        $office->description = $request->description;
        $office->address = $request->address;
        $office->phone = $request->phone;
        $office->slug = Str::slug($request->name, '-');
        $office->meta_keywords = $request->meta_keywords;
        $office->meta_description = $request->meta_description;
        $office->save();
        if ($request->hasFile('image'))
        {
            $office->clearMediaCollection('offices');
            $office->addMediaFromRequest('image')->toMediaCollection('offices');
        }
        Toastr::success('Office successfully updated');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        $office = Office::find($office->id);
        $office->clearMediaCollection('offices');
        $office->delete();
        Toastr::success('Office successfully deleted');
        return back();
    }
    public function offices($slug = null)
    {
        if ($slug == null) {
            $offices = Office::latest()->get();
            return view('offices.offices',[
                'offices' => $offices,
                'title' => 'Offices',
            ]);
        } else {
            $office = Office::where('slug', $slug)->first();

            if ($office) {
                return view('offices.office-single',[
                    'office' => $office,
                    'title' => $office->name,
                ]);
            } else {
                return abort(404);
            }
        }
    }
}
