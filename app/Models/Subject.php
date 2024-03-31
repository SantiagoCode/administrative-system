<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SectionSubject;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function sectionsubjects()
    {
        return $this->hasMany(SectionSubject::class);
    }
}
