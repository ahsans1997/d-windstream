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
        ]);
        $slug = Str::slug($request->title, '-');
        $event_id = Event::insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'venue' => $request->venue,
            'datetime' => $request->datetime,
            'organization' => $request->organization,
            'price' => $request->price,
            'registration_start' => $request->registration_start,
            'registration_end' => $request->registration_end,
            'maximum_sit' => $request->maximum_sit,
            'slug' => $slug,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'created_at' => Carbon::now(),
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $iamge_location = 'public/assets/images/events/'.$image_name;
            Image::make($image)->save(base_path($iamge_location));
            Event::findOrFail($event_id)->update([
                'image' => $image_name,
            ]);
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
        ]);
        $slug = Str::slug($request->title, '-');
        Event::findOrFail($event->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'department_id' => $request->department_id,
            'venue' => $request->venue,
            'datetime' => $request->datetime,
            'organization' => $request->organization,
            'price' => $request->price,
            'registration_start' => $request->registration_start,
            'registration_end' => $request->registration_end,
            'maximum_sit' => $request->maximum_sit,
            'slug' =>Str::slug($request->slug, '-'),
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'created_at' => Carbon::now(),
        ]);

        if ($request->hasFile('image')) {
            if(Event::findOrFail($event->id)->image != "default.png"){
                $location = 'public/assets/images/events/'.Event::findOrFail($event->id)->image;
                unlink(base_path($location));
                Event::findOrFail($event->id)->update([
                    'image' => "default.png",
                ]);
            }
            $image = $request->file('image');
            $image_name = $slug.".".$image->getClientOriginalExtension();
            $iamge_location = 'public/assets/images/events/'.$image_name;
            Image::make($image)->save(base_path($iamge_location));
            Event::findOrFail($event->id)->update([
                'image' => $image_name,
            ]);
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
        if(Event::findOrFail($event->id)->image != "default.png")
        {
            $image_location = 'public/assets/images/events/'.Event::findOrFail($event->id)->image;
            unlink(base_path($image_location));
        }
        Event::findOrFail($event->id)->delete();
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
