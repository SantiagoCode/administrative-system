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

    public function teachersections()
    {
        return $this->hasMany(TeacherSection::class);
    }

    public function studentsections()
    {
        return $this->hasMany(StudentSection::class);
    }
}
