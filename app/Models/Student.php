<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function student_section()
    {
        return $this->hasMany(StudentSection::class);
    }

    public function assessment_subject()
    {
        return $this->hasMany(AssessmentSubject::class);
    }

    public function subject_approval()
    {
        return $this->hasMany(SubjectApproval::class);
    }
}
