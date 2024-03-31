<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Student;

class SubjectApproval extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'subject_id',
        'student_id',
        'status',
        'calification'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
