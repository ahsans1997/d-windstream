<?php

namespace App\Http\Controllers;

use App\Models\CurriculamSubject;
use App\Models\Department;
use App\Models\Program;
use App\Models\ProgramCurriculamCours;
use App\Models\SyllabusAll;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function slug($name)
    {

        $slug = Str::slug($name, "-");

        if (Program::where('slug', $slug)->count() > 0) {
            return $this->slug($slug . '-1');
        } else {
            return $slug;
        }
    }
    public function index()
    {
        $data = [
            'programs' => Program::with('department')->get(),
        ];
        return view('admin.programs.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'departments' => Department::get(),
        ];

        return view('admin.programs.create', $data);
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
        try {
            $program = new Program();
            $program->name = $request->name;
            $program->session_name = $request->session_name;
            $program->description = $request->description;
            $program->description_list = $request->description_list;
            $program->duration_in_month = $request->course_duration;
            $program->faculty_id = 1;
            $program->deaprtment_id = $request->department_id;
            $program->dgree_type = $request->dgree_type;
            $program->slug = $this->slug($request->name);
            $program->save();

            if (isset($request->semister_course_name)) {
                $len_semister = sizeof($request->semister_course_name);
                for ($i = 0; $i < $len_semister; $i++) {
                    $program_curriculam_cours = new ProgramCurriculamCours();
                    $program_curriculam_cours->program_id = $program->id;
                    $program_curriculam_cours->name = $request->semister_course_name[$i];
                    $program_curriculam_cours->save();
                }
            }
            if(isset($request->syllabus_name)){

                $len_syllabus = sizeof($request->syllabus_name);
                for($i=0; $i<$len_syllabus; $i++){
                    $syllabus = new SyllabusAll();
                    $syllabus->programs_id = $program->id;
                    $syllabus->link = $request->syllabus_link[$i];
                    $syllabus->name = $request->syllabus_name[$i];
                    $syllabus->save();
                }
            }

            DB::commit();
            Toastr::success("Program Add Succssfully");
            return redirect()->route('programs.edit', $program->id);
        } catch (\Exception $e) {
            DB::rollback();
            dd($e);
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
    public function show($id)
    {
        $data=[
            'departments' => Department::get(),
            'program' => Program::with('semister.subjects','syllabus')->find($id),
        ];

        return view('admin.programs.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'departments' => Department::get(),
            'program' => Program::with('semister.subjects', 'syllabus')->find($id),
        ];

        return view('admin.programs.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'slug' => 'required|unique:programs,slug,' . $id
        ]);


        DB::beginTransaction();
        try {

            $program = Program::find($id);
            $program->name = $request->name;
            $program->session_name = $request->session_name;
            $program->description = $request->description;
            $program->description_list = $request->description_list;
            $program->duration_in_month = $request->course_duration;
            $program->faculty_id = 1;
            $program->deaprtment_id = $request->department_id;
            $program->dgree_type = $request->dgree_type;
            $program->slug = $request->slug;
            $program->save();


            $old_curriculam = ProgramCurriculamCours::where('program_id', $id)->pluck('id')->toArray();
            $old_curriculam_from_request = $request->semister_course_id;

            $array_diff = array_diff($old_curriculam, $old_curriculam_from_request);

            if (isset($array_diff)) {
                foreach ($array_diff as $key => $value) {
                    CurriculamSubject::where('program_curriculam_id', $value)->delete();
                    $program_curriculam_cours = ProgramCurriculamCours::find($value);
                    $program_curriculam_cours->delete();
                }
            }


            $len_semister = sizeof($request->semister_course_id);

            for ($i = 0; $i < $len_semister; $i++) {
                $program_curriculam_cours = ProgramCurriculamCours::find($request->semister_course_id[$i]);
                $program_curriculam_cours->name = $request->semister_course_name[$request->semister_course_id[$i]][0];
                $program_curriculam_cours->save();
            }

            if(isset($request->semister_course_name_new)){
                $len_semister_name_new = sizeof($request->semister_course_name_new);
                for($i=0; $i<$len_semister_name_new; $i++){

                        $program_curriculam_cours = new ProgramCurriculamCours();
                        $program_curriculam_cours->program_id = $program->id;
                        $program_curriculam_cours->name = $request->semister_course_name_new[$i];
                        $program_curriculam_cours->save();

                }
            }
            for ($i = 0; $i < $len_semister; $i++) {
                CurriculamSubject::where('program_curriculam_id', $request->semister_course_id[$i])->delete();
                if (isset($request->subjects_name[$request->semister_course_id[$i]])) {

                    $len_subjects = sizeof($request->subjects_name[$request->semister_course_id[$i]]);
                    for ($j = 0; $j < $len_subjects; $j++) {
                        $subjects = new CurriculamSubject();
                        $subjects->program_curriculam_id = $request->semister_course_id[$i];
                        $subjects->code = $request->subjects_code[$request->semister_course_id[$i]][$j];
                        $subjects->name = $request->subjects_name[$request->semister_course_id[$i]][$j];
                        $subjects->description = $request->subjects_description[$request->semister_course_id[$i]][$j];
                        $subjects->credit = $request->subjects_credit[$request->semister_course_id[$i]][$j];
                        $subjects->save();
                    }
                }
            }

            SyllabusAll::where('programs_id', $id)->delete();

            if(isset($request->syllabus_name)){

                $len_syllabus = sizeof($request->syllabus_name);
                for($i=0; $i<$len_syllabus; $i++){
                    $syllabus = new SyllabusAll();
                    $syllabus->programs_id = $program->id;
                    $syllabus->link = $request->syllabus_link[$i];
                    $syllabus->name = $request->syllabus_name[$i];
                    $syllabus->save();
                }
            }

            DB::commit();
            Toastr::success("Program Updated Successfuly");
            return back();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            Toastr::error("Some Problem is happen");
            return back();
        }
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

    public function program($slug = null)
    {

        if ($slug == null) {
            $data = [
                'programs' => Program::with('department')->paginate(5),
                'title' => 'Program'
            ];
            return view('program', $data);
        } else {

            $program = Program::with('department','faculty','semister','semister.subjects','syllabus')->where('slug', $slug)->first();

            // dd($program->toArray());
            $title = 'Program of ' . $program->name;
            return view('program-single', [
                'program' => $program,
                'title' => $title
            ]);
        }
    }

}
