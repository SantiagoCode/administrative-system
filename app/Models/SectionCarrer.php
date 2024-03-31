<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carrer;
use App\Models\Section;

class SectionCarrer extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_id',
        'carrer_id'
    ]; 

    public function carrer()
    {
        return $this->belongsTo(Carrer::class);
    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
