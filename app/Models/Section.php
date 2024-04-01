<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeacherSection;
use App\Models\StudentSection;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function teacher_sections()
    {
        return $this->belongsToMany(TeacherSection::class);
    }

    public function student_sections()
    {
        return $this->belongsToMany(StudentSection::class);
    }

    public function section_carrers()
    {
        return $this->hasMany(SectionCarrer::class);
    }
    
    public function section_subjects()
    {
        return $this->hasMany(SectionSubject::class);
    }

    public function assessment()
    {
        return $this->hasMany(Assessment::class);
    }
}