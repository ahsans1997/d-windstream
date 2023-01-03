<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacultyMember extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function department()
    {
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function education()
    {
        return $this->hasMany(FacultyMemberEducation::class,'faculty_member_id','id');
    }

    public function experience()
    {
        return $this->hasMany(FacultyMemberExperience::class,'faculty_member_id','id');
    }
    public function membership()
    {
        return $this->hasMany(FacultyMemberMembership::class,'faculty_member_id','id');
    }
    public function award()
    {
        return $this->hasMany(FacultyMemberAward::class,'faculty_member_id','id');
    }

    public function publications()
    {
        return $this->hasMany(FacultyMemberPublication::class,'faculty_member_id','id');
    }

    public function invited_talks()
    {
        return $this->hasMany(FacultyMemberResearchInvitedTalk::class,'faculty_member_id','id');
    }

    public function research_interests()
    {
        return $this->hasMany(FacultyMemberResearchInterest::class,'faculty_member_id','id');
    }

    public function research_supervisions()
    {
        return $this->hasMany(FacultyMemberResearchProjectSupervsion::class,'faculty_member_id','id');
    }

    public function research_works()
    {
        return $this->hasMany(FacultyMemberResearchWork::class,'faculty_member_id','id');
    }


    public function designation()
    {
        return $this->belongsTo(Designation::class,'designation_id','id');
    }


}
