<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.video.index',[
            'videos' => Video::all(),
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
        $video = new Video();
        $video->video = $request->video;
        if ($request->hasFile('images')) {
            $video->addMediaFromRequest('images')->toMediaCollection('videos');
        }
        $video->save();
        Toastr::success('Video Added Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        return view('admin.video.edit', [
            'video' => $video,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $video = Video::find($video->id);
        $video->video = $request->video;
        if ($request->hasFile('images')) {
            $video->clearMediaCollection('videos');
            $video->addMediaFromRequest('images')->toMediaCollection('videos');
        }
        $video->save();
        Toastr::success('Video Updated Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        $video = Video::find($video->id);
        $video->clearMediaCollection('videos');
        $video->delete();
        Toastr::warning('Video Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
