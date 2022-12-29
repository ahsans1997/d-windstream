<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Program;
use App\Models\ProgramCurriculamCours;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'programs' =>Program::with('department')->get(),
        ];
        return view('admin.programs.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'departments' => Department::get(),
        ];

        return view('admin.programs.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::beginTransaction();
        try{
            $program = new Program();
            $program->name = $request->name;
            $program->session_name = $request->session_name;
            $program->description = $request->description;
            $program->description_list = $request->description_list;
            $program->duration_in_month = $request->course_duration;
            $program->faculty_id = 1;
            $program->deaprtment_id = $request->department_id;
            $program->dgree_type = $request->dgree_type;
            $program->save();

            if(isset($request->semister_course_name)){
                $len_semister = sizeof($request->semister_course_name);
                for($i=0; $i<$len_semister; $i++){
                    $program_curriculam_cours = new ProgramCurriculamCours();
                    $program_curriculam_cours->program_id = $program->id;
                    $program_curriculam_cours->name = $request->semister_course_name[$i];
                    $program_curriculam_cours->save();
                }
            }

            DB::commit();
            Toastr::success("Program Add Succssfully");
            return redirect()->back();
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error("Some Problem Happen");
            return redirect()->back();

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
