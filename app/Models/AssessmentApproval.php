<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Assessment;
use App\Models\Student;

class AssessmentApproval extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'assessment_id',
        'student_id',
        'value',
        'status'
    ];

    public function assessment()
    {
        return $this->belongsTo(Assessment::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
