<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'profile_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
