<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'user_id'
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
