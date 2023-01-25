<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Department;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admission.index',[
            'admissions' => Admission::paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admission.create',[
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
            'title' => 'required|unique:admissions|max:255',
            'department_id' => 'required',
            'admission_type' => 'required',
            'overview' => 'required',
            'notice' => 'required',
            'attachment' => 'required',
        ]);
        $admission = new Admission();
        $admission->title = $request->title;
        $admission->department_id = $request->department_id;
        $admission->admission_type = $request->admission_type;
        $admission->overview = $request->overview;
        $admission->notice = $request->notice;
        $admission->attachment = $request->attachment;
        $admission->slug = Str::slug($request->title);
        $admission->save();
        Toastr::success('Admission Successfully Saved' ,'Success');
        return redirect()->route('admission.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function show(Admission $admission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function edit(Admission $admission)
    {
        return view('admin.admission.edit',[
            'admission' => $admission,
            'departments' => Department::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admission $admission)
    {
        $validated = $request->validate([
            'title' => 'required|unique:admissions|max:255',
            'department_id' => 'required',
            'admission_type' => 'required',
            'overview' => 'required',
            'notice' => 'required',
            'attachment' => 'required',
        ]);
        $admission = Admission::find($admission->id);
        $admission->title = $request->title;
        $admission->department_id = $request->department_id;
        $admission->admission_type = $request->admission_type;
        $admission->overview = $request->overview;
        $admission->notice = $request->notice;
        $admission->attachment = $request->attachment;
        $admission->slug = Str::slug($request->title);
        $admission->save();
        Toastr::success('Admission Successfully Updated' ,'Success');
        return redirect()->route('admission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admission  $admission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admission $admission)
    {
        $admission = Admission::find($admission->id);
        $admission->delete();
        Toastr::warning('Admission Successfully Deleted' ,'Success');
        return redirect()->back();
    }

    public function admission($slug = null)
    {
        if($slug == null){
            $admissions = Admission::latest()->paginate(10);
            return view('admission.admission',[
                'admissions' => $admissions,
                'title' => 'Admission',
            ]);
        }else{
            $admission = Admission::where('slug', $slug)->first();
            return view('admission.admission-single',[
                'admission' => $admission,
                'title' => $admission->title,
            ]);
        }
    }
}
