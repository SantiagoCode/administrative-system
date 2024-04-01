<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssessmentDates extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'date',
        'start_time',
        'end_time',
        'duration',
        'assessment_id',
        'evaluation_number'
    ];

    public function assessment()
    {
        return $this->hasMany(Assessment::class);
    }
}
