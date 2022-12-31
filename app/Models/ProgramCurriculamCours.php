<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramCurriculamCours extends Model
{
    use HasFactory;

    public function subjects()
    {
        return $this->hasMany(CurriculamSubject::class,'program_curriculam_id','id');
    }
}
