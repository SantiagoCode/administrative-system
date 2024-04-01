<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;
use App\Models\Section;

class Assessment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'id',
        'name',
        'description',
        'date',
        'time',
        'duration',
        'status',
        'teacher_id',
        'section_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    public function assessment_date()
    {
        return $this->belongsTo(AssessmentDate::class);
    }

    public function assessment_approval()
    {
        return $this->hasMany(AssessmentApproval::class);
    }

}
