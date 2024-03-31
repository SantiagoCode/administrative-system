<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserChat;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id'
    ];

    public function userchat()
    {
        return $this->belongsToMany(UserChat::class);
    }
}
