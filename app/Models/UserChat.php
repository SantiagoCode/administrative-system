<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class UserChat extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'chat_id'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function chat()
    {
        return $this->hasOne(Chat::class);
    }
}
