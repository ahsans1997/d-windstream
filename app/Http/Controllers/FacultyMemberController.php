<?php

namespace App\Http\Controllers;

use App\Models\Year;
use App\Models\Country;
use App\Models\Department;
use App\Models\Designation;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\FacultyMember;
use App\Models\FacultyMemberAward;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\FacultyMemberEducation;
use App\Models\FacultyMemberExperience;
use App\Models\FacultyMemberMembership;
use App\Models\FacultyMemberPublication;
use App\Models\FacultyMemberResearchInterest;
use App\Models\FacultyMemberResearchInvitedTalk;
use App\Models\FacultyMemberResearchProjectSupervsion;
use App\Models\FacultyMemberResearchWork;

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
            'desigantions' => Designation::get(),
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
        // dd($request->all());
        $request->validate([
            'file' => 'mimes:pdf| max:10240',
            'image' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp,pdf| max:2048',
        ]);
        DB::beginTransaction();
        try {

            $facultyMember = new FacultyMember();
            $facultyMember->name = $request->name;
            $facultyMember->designation_id = $request->designation;
            $facultyMember->contact = $request->contact;
            $facultyMember->department_id = $request->department_id;
            $facultyMember->bio = $request->bio;
            $facultyMember->slug = $this->slug($request->name);
            $facultyMember->faculty_id = 1;
            $facultyMember->on_leave = isset($request->on_leave) ? $request->on_leave : "false";

            if ($request->image) {
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(storage_path('app/public/facultyMember'), $fileName);
                $facultyMember->image = $fileName;
            }

            if ($request->file) {
                $fileNamecv = time() . '.' . $request->file->extension();
                $request->file->move(storage_path('app/public/facultyMember'), $fileNamecv);
                $facultyMember->file = $fileNamecv;
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
                    $facultyMemberExperience->title = $request->expirence_title[$i];
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
                    $facultyMemberMembership->title = $request->membership_naem[$i];
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
                    $facultyMemberAward->title = $request->award_title[$i];
                    $facultyMemberAward->year = $request->award_year[$i];
                    $facultyMemberAward->country_id = $request->award_country[$i];
                    $facultyMemberAward->description = $request->award_desciption[$i];
                    $facultyMemberAward->save();
                }
            }

            if(isset($request->publication_type)){
                $len_publication = sizeof($request->publication_type);
                for($i=0; $i<$len_publication; $i++){
                    $facultyMemberPublication = new FacultyMemberPublication();
                    $facultyMemberPublication->faculty_member_id = $facultyMember->id;
                    $facultyMemberPublication->type = $request->publication_type[$i];
                    $facultyMemberPublication->description = $request->publication_desciption[$i];
                    $facultyMemberPublication->link = $request->publication_link[$i];
                    $facultyMemberPublication->save();
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
            'faculty_member' => FacultyMember::with('department', 'education', 'experience', 'membership', 'award','publications')->find($id),
            'departments' => Department::get(),
            'years' => Year::get(),
            'countries' => Country::get(),
            'desigantions' => Designation::get(),

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
        // dd($request->all());

        $request->validate([
            'slug' => 'required|unique:faculty_members,slug,'.$id,
            'file' => 'mimes:pdf| max:10240',
            'image' => 'mimes:jpg,jpeg,png,bmp,gif,svg,webp,pdf| max:2048',
        ]);

        DB::beginTransaction();
        try {

            $facultyMember = FacultyMember::find($id);

            FacultyMemberEducation::where('faculty_member_id', $facultyMember->id)->delete();
            FacultyMemberExperience::where('faculty_member_id', $facultyMember->id)->delete();
            FacultyMemberMembership::where('faculty_member_id', $facultyMember->id)->delete();
            FacultyMemberAward::where('faculty_member_id', $facultyMember->id)->delete();
            FacultyMemberPublication::where('faculty_member_id', $facultyMember->id)->delete();


            $facultyMember->name = $request->name;
            $facultyMember->designation_id = $request->designation;
            $facultyMember->contact = $request->contact;
            $facultyMember->department_id = $request->department_id;
            $facultyMember->bio = $request->bio;
            $facultyMember->slug = $request->slug;
            $facultyMember->faculty_id = 1;
            $facultyMember->on_leave = isset($request->on_leave) ? $request->on_leave : "false";

            if ($request->image) {
                $fileName = time() . '.' . $request->image->extension();
                $request->image->move(storage_path('app/public/facultyMember'), $fileName);
                $facultyMember->image = $fileName;
            }

            if ($request->file) {
                $fileNamecv = time() . '.' . $request->file->extension();
                $request->file->move(storage_path('app/public/facultyMember'), $fileNamecv);
                $facultyMember->file = $fileNamecv;
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
                    $facultyMemberExperience->title = $request->expirence_title[$i];
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
                    $facultyMemberMembership->title = $request->membership_naem[$i];
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
                    $facultyMemberAward->title = $request->award_title[$i];
                    $facultyMemberAward->year = $request->award_year[$i];
                    $facultyMemberAward->country_id = $request->award_country[$i];
                    $facultyMemberAward->description = $request->award_desciption[$i];
                    $facultyMemberAward->save();
                }
            }

            if(isset($request->publication_type)){
                $len_publication = sizeof($request->publication_type);
                for($i=0; $i<$len_publication; $i++){
                    $facultyMemberPublication = new FacultyMemberPublication();
                    $facultyMemberPublication->faculty_member_id = $facultyMember->id;
                    $facultyMemberPublication->type = $request->publication_type[$i];
                    $facultyMemberPublication->description = $request->publication_desciption[$i];
                    $facultyMemberPublication->link = $request->publication_link[$i];
                    $facultyMemberPublication->save();
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
        return view('faculty-member-list', $data);
    }

    public function memberProfile($slug)
    {
        $member = FacultyMember::with('department','designation','education','experience','membership','award')->where('slug', $slug)->first();

        if($member){
            $data = [
                'member' => $member,
                'title' => 'Profile of '.$member->name,
            ];
            return view('member-profile', $data);
        }else{
            return abort(404);
        }



    }

    public function addResearch($id){
        $data = [
            'faculty_member' => FacultyMember::with('invited_talks','research_interests','research_supervisions','research_works')->find($id),
        ];
        return view('admin.facultyMember.researchCreate', $data);
    }

    public function facultyMemberResearchStore(Request $request, $id)
    {
        // dd($request->all());

        DB::beginTransaction();
        try{

            FacultyMemberResearchInterest::where('faculty_member_id', $id)->delete();
            FacultyMemberResearchProjectSupervsion::where('faculty_member_id', $id)->delete();
            FacultyMemberResearchWork::where('faculty_member_id', $id)->delete();
            FacultyMemberResearchInvitedTalk::where('faculty_member_id', $id)->delete();

            if(isset($request->research_interset_subject)){
                $len_research_interset_subject = sizeof($request->research_interset_subject);
                for($i=0; $i<$len_research_interset_subject; $i++){
                    $facultyMemberResearchInterest = new FacultyMemberResearchInterest();
                    $facultyMemberResearchInterest->faculty_member_id = $id;
                    $facultyMemberResearchInterest->subject = $request->research_interset_subject[$i];
                    $facultyMemberResearchInterest->description = $request->research_interset_description[$i];
                    $facultyMemberResearchInterest->rechach_interest_target_goal = $request->research_interset_goal[$i];
                    $facultyMemberResearchInterest->save();

                    // dd($facultyMemberResearchInterest);
                }
            }

            if(isset($request->research_supervision_level_study)){
                $len_research_supervision_level_study = sizeof($request->research_supervision_level_study);
                for($i=0; $i<$len_research_supervision_level_study; $i++){
                    $facultyMemberResearchProjectSupervsion = new FacultyMemberResearchProjectSupervsion();
                    $facultyMemberResearchProjectSupervsion->faculty_member_id = $id;
                    $facultyMemberResearchProjectSupervsion->level_of_study = $request->research_supervision_level_study[$i];
                    $facultyMemberResearchProjectSupervsion->title = $request->research_supervision_title[$i];
                    $facultyMemberResearchProjectSupervsion->supervisor = $request->research_supervision_supervisor[$i];
                    $facultyMemberResearchProjectSupervsion->co_supervisor = $request->research_supervision_co_supervisor[$i];
                    $facultyMemberResearchProjectSupervsion->student_name = $request->research_supervision_student[$i];
                    $facultyMemberResearchProjectSupervsion->area_of_research = $request->research_supervision_area_of_research[$i];
                    $facultyMemberResearchProjectSupervsion->current_completion = $request->research_supervision_current_competion[$i];
                    $facultyMemberResearchProjectSupervsion->save();
                }
            }

            if(isset($request->research_work_subject)){
                $len_research_work_subject = sizeof($request->research_work_subject);
                for($i=0; $i<$len_research_work_subject; $i++){
                    $facultyMemberResearchWork = new FacultyMemberResearchWork();
                    $facultyMemberResearchWork->faculty_member_id = $id;
                    $facultyMemberResearchWork->subject = $request->research_work_subject[$i];
                    $facultyMemberResearchWork->project_name = $request->research_work_project_name[$i];
                    $facultyMemberResearchWork->source_of_funding = $request->research_work_source_of_fund[$i];
                    $facultyMemberResearchWork->from_date = $request->research_work_from_date[$i];
                    $facultyMemberResearchWork->to_date = $request->research_work_to_date[$i];
                    $facultyMemberResearchWork->collaboration = $request->research_work_collaboration[$i];
                    $facultyMemberResearchWork->save();
                }
            }

            if(isset($request->invited_talk_title)){
                $len_invited_talk_title = sizeof($request->invited_talk_title);
                for($i=0; $i<$len_invited_talk_title; $i++){
                    $facultyMemberResearchInvitedTalk = new FacultyMemberResearchInvitedTalk();
                    $facultyMemberResearchInvitedTalk->faculty_member_id = $id;
                    $facultyMemberResearchInvitedTalk->invited_talk_title = $request->invited_talk_title[$i];
                    $facultyMemberResearchInvitedTalk->save();
                }
            }

            DB::commit();
            Toastr::success("Faculty Member Research Updated Successfully");
            return redirect()->back();
        }catch(\Exception $e){
            DB::rollback();
            dd($e);
            Toastr::error("Some Problem happen");
        }

    }
}
