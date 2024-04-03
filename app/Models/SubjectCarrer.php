<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrer;
use App\Models\Subject;

class SubjectCarrer extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'carrer_id'
    ]; 

    public function carrer()
    {
        return $this->hasMany(Carrer::class);
    }

    public function section()
    {
        return $this->hasMany(Subject::class);
    }
}
