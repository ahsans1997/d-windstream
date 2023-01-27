<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Resources;
use App\Models\Video;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function show(Resources $resources)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function edit(Resources $resources)
    {
        return view('admin.resources', [
            'resources' => Resources::find(1),
            'title' => 'Resources'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resources $resources)
    {

        // dd($request->all());
        $resources = Resources::find(1);
        if($request->boys)
        {
            $validated = $request->validate([
                'boys' => 'required',
            ]);

            $resources->boys = $request->boys;

            if($request->hasFile('boysimage'))
            {
                $resources->clearMediaCollection('boys');
                $resources->addMediaFromRequest('boysimage')->toMediaCollection('boys');
            }
        }

        if($request->girls)
        {
            $validated = $request->validate([
                'girls' => 'required',
            ]);

            $resources->girls = $request->girls;

            if($request->hasFile('girlsimage'))
            {
                $resources->clearMediaCollection('girls');
                $resources->addMediaFromRequest('girlsimage')->toMediaCollection('girls');
            }
        }
        if($request->medical)
        {
            $validated = $request->validate([
                'medical' => 'required',
            ]);

            $resources->medical = $request->medical;

            if($request->hasFile('medicalimage'))
            {
                $resources->clearMediaCollection('medical');
                $resources->addMediaFromRequest('medicalimage')->toMediaCollection('medical');
            }
        }
        if($request->library)
        {
            $validated = $request->validate([
                'library' => 'required',
            ]);

            $resources->library = $request->library;

            if($request->hasFile('libraryimage'))
            {
                $resources->clearMediaCollection('library');
                $resources->addMediaFromRequest('libraryimage')->toMediaCollection('library');
            }
        }
        if($request->cafe)
        {
            $validated = $request->validate([
                'cafe' => 'required',
            ]);

            $resources->cafe = $request->cafe;

            if($request->hasFile('cafeimage'))
            {
                $resources->clearMediaCollection('cafe');
                $resources->addMediaFromRequest('cafeimage')->toMediaCollection('cafe');
            }
        }


        $resources->save();
        Toastr::success('Resources Updated Successfully', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resources  $resources
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resources $resources)
    {
        //
    }

    public function resources()
    {
        return view('resources', [
            'resources' => Resources::find(1),
            'photos' => Gallery::find(1),
            'videos' => Video::all(),
            'title' => 'Resources',
        ]);
    }
}
