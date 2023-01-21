<?php

namespace App\Http\Controllers;

use App\Models\About;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about',[
            'abouts' => About::findOrFail(1),
        ]);
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $about = About::findOrFail(1);
        if($request->historicaloverview)
        {
            $about->historicaloverview = $request->historicaloverview;
        }
        if($request->mission)
        {
            $about->mission = $request->mission;
        }
        if($request->vision)
        {
            $about->vision = $request->vision;
        }
        if($request->messagefromchairman)
        {
            $about->cname = $request->cname;
            $about->messagefromchairman = $request->messagefromchairman;
            if ($request->hasFile('cimage')) {
                $about->clearMediaCollection('chairman');
                $about->addMedia($request->cimage)->toMediaCollection('chairman');

            }
        }
        if($request->messagefromprincipal)
        {
            $about->pname = $request->pname;
            $about->messagefromprincipal = $request->messagefromprincipal;
            if ($request->hasFile('pimage')) {
                $about->addMedia($request->pimage)->toMediaCollection('principal');
            }
        }
        $about->save();
        Toastr::success('About Updated Successfully', 'Success');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }

    public function about()
    {
        return view('about',[
            'about' => About::findOrFail(1),
            'title' => 'About',
        ]);
    }
}
