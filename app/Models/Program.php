<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Program extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function department()
    {
        return $this->belongsTo(Department::class,'deaprtment_id','id');
    }

    public function semister()
    {
        return $this->hasMany(ProgramCurriculamCours::class,'program_id','id');
    }

    public function syllabus()
    {
        return $this->hasMany(SyllabusAll::class,'programs_id','id');
    }
}
