<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::find(1);
        return view('admin.gallery', [
            'photos' => $gallery,
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
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {

        $gallery = Gallery::find(1);
        if($request->hasFile('images'))
        {
            $gallery->addMediaFromRequest('images')->toMediaCollection('gallery');
        }
        Toastr::success('Gallery Image Added Successfully', 'Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery, $id)
    {
        //
    }
    public function delete(Gallery $gallery, $id)
    {
        $media = $gallery->getMedia('gallery');
        $photo = $media->where('id', $id)->first();
        $photo->delete();
        Toastr::warning('Gallery Image Deleted Successfully', 'Success');
        return redirect()->back();
    }
}
