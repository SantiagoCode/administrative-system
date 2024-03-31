<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SectionCarrer;

class Carrer extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function sectioncarrers()
    {
        return $this->hasMany(SectionCarrer::class);
    }
}
