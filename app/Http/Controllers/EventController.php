<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.event.index',[
            'events' => Event::orderBy('id','desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create',[
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
            'title' => 'required|unique:events',
            'description' => 'required',
            'department_id' => 'required',
            'datetime' => 'required',
            'image' => 'mimes:JPG,jpg,jpeg,png,gif,svg|max:10248',
        ]);
        $event = new Event();
        $slug = Str::slug($request->title, '-');

        $event->title = $request->title;
        $event->description = $request->description;
        $event->department_id = $request->department_id;
        $event->venue = $request->venue;
        $event->datetime = $request->datetime;
        $event->organization = $request->organization;
        $event->price = $request->price;
        $event->registration_start = $request->registration_start;
        $event->registration_end = $request->registration_end;
        $event->maximum_sit = $request->maximum_sit;
        $event->slug = $slug;
        $event->meta_keywords = $request->meta_keywords;
        $event->meta_description = $request->meta_description;
        $event->created_at = Carbon::now();
        $event->save();


        if ($request->hasFile('image')) {
            $event->addMediaFromRequest('image')->toMediaCollection('event');
        }
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $event->addMedia($img)->toMediaCollection('events');
            }
        }
        return back()->with('success', 'Event Added SuccessFull.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit',[
            'event' => Event::findOrFail($event->id),
            'departments' => Department::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'department_id' => 'required',
            'datetime' => 'required',
            'slug' => 'required|unique:events,slug,'.$event->id,
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10248',
        ]);
        $slug = Str::slug($request->title, '-');

        $event = Event::findOrFail($event->id);
        $event->title = $request->title;
        $event->description = $request->description;
        $event->department_id = $request->department_id;
        $event->venue = $request->venue;
        $event->datetime = $request->datetime;
        $event->organization = $request->organization;
        $event->price = $request->price;
        $event->registration_start = $request->registration_start;
        $event->registration_end = $request->registration_end;
        $event->maximum_sit = $request->maximum_sit;
        $event->slug = Str::slug($request->slug, '-');
        $event->meta_keywords = $request->meta_keywords;
        $event->meta_description = $request->meta_description;
        $event->created_at = Carbon::now();
        $event->save();

        if($request->hasFile('image')){

            $event->clearMediaCollection('event');

            $event->addMediaFromRequest('image')->toMediaCollection('event');
        }
        if($request->hasFile('images')){
            foreach ($event->getMedia('events') as $img) {
                $event->clearMediaCollection('events');
            }

            foreach ($request->file('images') as $img) {
                $event->addMedia($img)->toMediaCollection('events');
            }
        }

        return redirect()->route('event.index')->with('success', 'Event Added SuccessFull.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event = Event::findOrFail($event->id);
        $event->clearMediaCollection('event');
        foreach ($event->getMedia('events') as $img) {
            $event->clearMediaCollection('events');
        }
        $event->delete();
        return back()->with('delete', 'Event Delete Successfull.');
    }

    public function featured($id)
    {
        if(Event::findOrFail($id)->featured == 1){
            Event::findOrFail($id)->update([
                'featured' => 2,
            ]);
        }
        else{
            Event::findOrFail($id)->update([
                'featured' => 1,
            ]);
        }
        return back();
    }

    public function event()
    {
        return view('event',[
            'events' => Event::orderBy('id', 'desc')->simplePaginate(5),
        ]);
    }
    public function eventsingle($slug){
        return view('event-single',[
            'event_info' => Event::where('slug', $slug)->first(),
            'events' => Event::orderBy('id', 'desc')->limit(3)->get(),
        ]);
    }
}
