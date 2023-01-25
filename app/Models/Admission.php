<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'department_id',
        'admission_type',
        'overview',
        'notice',
        'attachment',
        'slug',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
