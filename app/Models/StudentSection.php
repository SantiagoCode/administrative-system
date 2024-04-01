<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Section;

class StudentSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_id',
        'section_id'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function section()
    {
        return $this->hasMany(Section::class);
    }
}
