<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Country;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FacultyMember;
use App\Models\FacultyMemberAward;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\FacultyMemberEducation;
use App\Models\FacultyMemberExperience;
use App\Models\FacultyMemberMembership;

class FacultyMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'faculty_members' => FacultyMember::with('department')->get(),
        ];

        return view('admin.facultyMember.index', $data);
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
            'years' => Year::get(),
            'countries' => Country::get(),
        ];
        return view('admin.facultyMember.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function slug($name)
    {

        $slug = Str::slug($name, "-");       

        if (FacultyMember::where('slug', $slug)->count() > 0) {
            return $this->slug($slug . '-1');
        } else {
            return $slug;
        }
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $facultyMember = new FacultyMember();
            $facultyMember->name = $request->name;
            $facultyMember->designation = $request->designation;
            $facultyMember->contact = $request->contact;
            $facultyMember->department_id = $request->department_id;
            $facultyMember->bio = $request->bio;
            $facultyMember->slug = $this->slug($request->name);
            $facultyMember->faculty_id = 1;

            if ($request->image) {
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(storage_path('app/public/facultyMember'), $fileName);
                $facultyMember->image = $fileName;
            }

            $facultyMember->save();

            if (isset($request->eductation_dgree_name)) {
                $len_education = sizeof($request->eductation_dgree_name);
                for ($i = 0; $i < $len_education; $i++) {
                    $facultyMemberEducation = new FacultyMemberEducation();
                    $facultyMemberEducation->faculty_member_id = $facultyMember->id;
                    $facultyMemberEducation->degree_name = $request->eductation_dgree_name[$i];
                    $facultyMemberEducation->subject = $request->eductation_subject[$i];
                    $facultyMemberEducation->board_or_institute = $request->eductation_board[$i];
                    $facultyMemberEducation->country_id = $request->education_country[$i];
                    $facultyMemberEducation->passing_year = $request->education_year[$i];
                    $facultyMemberEducation->save();
                }
            }

            if (isset($request->expirence_title)) {
                $len_experience =  sizeof($request->expirence_title);
                for ($i = 0; $i < $len_experience; $i++) {
                    $facultyMemberExperience = new FacultyMemberExperience();
                    $facultyMemberExperience->faculty_member_id = $facultyMember->id;
                    $facultyMemberExperience->titel = $request->expirence_title[$i];
                    $facultyMemberExperience->organization = $request->expirence_organization[$i];
                    $facultyMemberExperience->location = $request->expirence_location[$i];
                    $facultyMemberExperience->from_date = $request->expirence_from_date[$i];
                    $facultyMemberExperience->to_date = $request->expirence_to_date[$i];
                    $facultyMemberExperience->save();
                }
            }

            if (isset($request->membership_naem)) {
                $len_membership = sizeof($request->membership_naem);
                for ($i = 0; $i < $len_membership; $i++) {
                    $facultyMemberMembership = new FacultyMemberMembership();
                    $facultyMemberMembership->faculty_member_id = $facultyMember->id;
                    $facultyMemberMembership->titel = $request->membership_naem[$i];
                    $facultyMemberMembership->type = $request->membership_type[$i];
                    $facultyMemberMembership->membership_year = $request->membership_year[$i];
                    $facultyMemberMembership->expire_year = $request->membership_expire_year[$i];
                    $facultyMemberMembership->save();
                }
            }

            if (isset($request->award_type)) {
                $len_award = sizeof($request->award_type);
                for ($i = 0; $i < $len_award; $i++) {
                    $facultyMemberAward = new FacultyMemberAward();
                    $facultyMemberAward->faculty_member_id = $facultyMember->id;
                    $facultyMemberAward->type = $request->award_type[$i];
                    $facultyMemberAward->titel = $request->award_title[$i];
                    $facultyMemberAward->year = $request->award_year[$i];
                    $facultyMemberAward->country_id = $request->award_country[$i];
                    $facultyMemberAward->description = $request->award_desciption[$i];
                    $facultyMemberAward->save();
                }
            }
            DB::commit();
            Toastr::success("Faculty Member Created Successfuly");
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Some Problem happen");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacultyMember  $facultyMember
     * @return \Illuminate\Http\Response
     */
    public function show(FacultyMember $facultyMember)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacultyMember  $facultyMember
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = [
            'faculty_member' => FacultyMember::with('department', 'education', 'experience', 'membership', 'award')->find($id),
            'departments' => Department::get(),
            'years' => Year::get(),
            'countries' => Country::get(),
        ];

        return view('admin.facultyMember.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacultyMember  $facultyMember
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {

            $facultyMember = FacultyMember::find($id);

            FacultyMemberEducation::where('faculty_member_id', $facultyMember->id)->delete();
            FacultyMemberExperience::where('faculty_member_id', $facultyMember->id)->delete();
            FacultyMemberMembership::where('faculty_member_id', $facultyMember->id)->delete();
            FacultyMemberAward::where('faculty_member_id', $facultyMember->id)->delete();


            $facultyMember->name = $request->name;
            $facultyMember->designation = $request->designation;
            $facultyMember->contact = $request->contact;
            $facultyMember->department_id = $request->department_id;
            $facultyMember->bio = $request->bio;
            $facultyMember->slug = $this->slug($request->name);
            $facultyMember->faculty_id = 1;

            if ($request->image) {
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(storage_path('app/public/facultyMember'), $fileName);
                $facultyMember->image = $fileName;
            }

            $facultyMember->save();

            if (isset($request->eductation_dgree_name)) {
                $len_education = sizeof($request->eductation_dgree_name);
                for ($i = 0; $i < $len_education; $i++) {
                    $facultyMemberEducation = new FacultyMemberEducation();
                    $facultyMemberEducation->faculty_member_id = $facultyMember->id;
                    $facultyMemberEducation->degree_name = $request->eductation_dgree_name[$i];
                    $facultyMemberEducation->subject = $request->eductation_subject[$i];
                    $facultyMemberEducation->board_or_institute = $request->eductation_board[$i];
                    $facultyMemberEducation->country_id = $request->education_country[$i];
                    $facultyMemberEducation->passing_year = $request->education_year[$i];
                    $facultyMemberEducation->save();
                }
            }

            if (isset($request->expirence_title)) {
                $len_experience =  sizeof($request->expirence_title);
                for ($i = 0; $i < $len_experience; $i++) {
                    $facultyMemberExperience = new FacultyMemberExperience();
                    $facultyMemberExperience->faculty_member_id = $facultyMember->id;
                    $facultyMemberExperience->titel = $request->expirence_title[$i];
                    $facultyMemberExperience->organization = $request->expirence_organization[$i];
                    $facultyMemberExperience->location = $request->expirence_location[$i];
                    $facultyMemberExperience->from_date = $request->expirence_from_date[$i];
                    $facultyMemberExperience->to_date = $request->expirence_to_date[$i];
                    $facultyMemberExperience->save();
                }
            }

            if (isset($request->membership_naem)) {
                $len_membership = sizeof($request->membership_naem);
                for ($i = 0; $i < $len_membership; $i++) {
                    $facultyMemberMembership = new FacultyMemberMembership();
                    $facultyMemberMembership->faculty_member_id = $facultyMember->id;
                    $facultyMemberMembership->titel = $request->membership_naem[$i];
                    $facultyMemberMembership->type = $request->membership_type[$i];
                    $facultyMemberMembership->membership_year = $request->membership_year[$i];
                    $facultyMemberMembership->expire_year = $request->membership_expire_year[$i];
                    $facultyMemberMembership->save();
                }
            }

            if (isset($request->award_type)) {
                $len_award = sizeof($request->award_type);
                for ($i = 0; $i < $len_award; $i++) {
                    $facultyMemberAward = new FacultyMemberAward();
                    $facultyMemberAward->faculty_member_id = $facultyMember->id;
                    $facultyMemberAward->type = $request->award_type[$i];
                    $facultyMemberAward->titel = $request->award_title[$i];
                    $facultyMemberAward->year = $request->award_year[$i];
                    $facultyMemberAward->country_id = $request->award_country[$i];
                    $facultyMemberAward->description = $request->award_desciption[$i];
                    $facultyMemberAward->save();
                }
            }
            DB::commit();
            Toastr::success("Faculty Member Updated Successfuly");
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e);
            DB::rollback();
            Toastr::error("Some Problem happen");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacultyMember  $facultyMember
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacultyMember $facultyMember)
    {
        // dd($facultyMember);
        FacultyMember::find($facultyMember->id)->delete();
        Toastr::success("Faculty Member Deleted Successfully");
        return redirect()->back();
    }

    public function getCountryYear()
    {
        $data = [
            'years' => Year::orderBy('id', 'ASC')->get(),
            'countries' => Country::get(),
        ];
        return $data;
    }

    public function facultyMember()
    {
        $data = [
            'faculty_members' => FacultyMember::with('department')->get(),
            'title' => 'Faculty Members',
        ];
        return view('faculty-member', $data);
    }
}
