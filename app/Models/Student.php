<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'email', 
        'phone', 
        'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}