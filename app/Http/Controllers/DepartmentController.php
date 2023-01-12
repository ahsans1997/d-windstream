<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\News;
use App\Models\Event;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FacultyMember;
use Brian2694\Toastr\Facades\Toastr;
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
            'image' => 'mimes:JPG,jpg,jpeg,png,gif,svg|max:10248',
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
            $department = new Department();
            $department->addMediaFromRequest('image')->toMediaCollection('department');
            $department->save();
        }
        Toastr::success('Department Successfully Added', 'Success');
        return back();
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
            $department = Department::findOrFail($department->id);

            $department->clearMediaCollection('department');

            $department->addMediaFromRequest('image')->toMediaCollection('department');
        }
        Toastr::success('Department Successfully Updated', 'Success');
        return redirect()->route('department.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        $department = Department::findOrFail($department->id);
        $department->clearMediaCollection('image');
        $department->delete();
        Toastr::warning('Department Successfully Deleted');
        return back();
    }

    public function department($slug = null)
    {
        if ($slug == null) {
            $data = [
                'departments' => Department::paginate(9),
                'title' => 'Departments'
            ];
            return view('department', $data);
        } else {

            $department = Department::where('slug', $slug)->first();

            if ($department) {

                $title = 'Department of ' . $department->name;
                $department_news = News::where('department_id', $department->id)->orderBY('id', 'desc')->paginate(5);
                $department_news_featured = News::where('department_id', $department->id)->where('action', 1)->orderBY('id', 'desc')->limit(2)->get();
                $department_events = Event::where('department_id', $department->id)->where('datetime','>',Carbon::now())->paginate(5);
                $department_faculty_member = FacultyMember::with('designation')->where('department_id', $department->id)->orderBy('order', 'asc')->paginate(4);

                return view('department-single', [
                    'department' => $department,
                    'department_news' => $department_news,
                    'department_news_featured' => $department_news_featured,
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
