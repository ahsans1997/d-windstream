<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Event;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FacultyMember;
use Intervention\Image\Facades\Image;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.department.index', [
            'departments' => Department::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
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
            'name' => 'required|unique:departments',
            'description' => 'required',
            'contact_info' => 'required|numeric',
        ]);
        $slug = Str::slug($request->name, '-');
        $department_id = Department::insertGetId([
            'name' => $request->name,
            'description' => $request->description,
            'contact_info' => $request->contact_info,
            'social_link' => json_encode($request->only('facebook', 'twiter', 'linkdin')),
            'slug' => $slug,
            'created_at' => Carbon::now(),
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = $slug . "." . $image->getClientOriginalExtension();
            $iamge_location = 'public/assets/images/department/' . $image_name;
            Image::make($image)->save(base_path($iamge_location));
            Department::findOrFail($department_id)->update([
                'image' => $image_name,
            ]);
        }
        return back()->with('success', 'Department Added SuccessFull.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        return view('admin.department.edit', [
            'department' => Department::findOrFail($department->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'contact_info' => 'required|numeric',
        ]);
        $slug = Str::slug($request->name, '-');
        Department::findOrFail($department->id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'contact_info' => $request->contact_info,
            'social_link' => json_encode($request->only('facebook', 'twiter', 'linkdin')),
            'slug' => $slug,
        ]);

        if ($request->hasFile('image')) {
            if (Department::findOrFail($department->id)->image != "default.png") {
                $location = 'public/assets/images/department/' . Department::findOrFail($department->id)->image;
                unlink(base_path($location));
                Department::findOrFail($department->id)->update([
                    'image' => "default.png",
                ]);
            }
            $image = $request->file('image');
            $image_name = $slug . "." . $image->getClientOriginalExtension();
            $image_location = 'public/assets/images/department/' . $image_name;
            Image::make($image)->save(base_path($image_location));
            Department::findOrFail($department->id)->update([
                'image' => $image_name,
            ]);
        }
        return redirect()->route('department.index')->with('success', 'Department update successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        if (Department::findOrFail($department->id)->image != "default,png") {
            $image_location = 'public/assets/images/department/' . Department::findOrFail($department->id)->image;
            unlink(base_path($image_location));
        }
        Department::findOrFail($department->id)->delete();
        return back()->with('delete', 'Your Department Delete Successfull.');
    }

    public function department($slug = null)
    {
        if ($slug == null) {
            $data = [
                'departments' => Department::paginate(9),
                'title' => 'Department'
            ];
            return view('department', $data);
        } else {

            $department = Department::where('slug', $slug)->first();

            if ($department) {
                $title = 'Program of ' . $department->name;
                $department_news = News::where('department_id', $department->id)->orderBY('id','desc')->paginate(5);
                $department_events = Event::where('department_id', $department->id)->paginate(5);
                $department_faculty_member = FacultyMember::where('department_id', $department->id)->paginate(5);
                return view('department-single', [
                    'department' => $department,
                    'department_news' => $department_news,
                    'department_events' => $department_events,
                    'department_faculty_member' => $department_faculty_member,
                    'title' => $title
                ]);
            } else {
                return abort(404);
            }
        }
    }
}
