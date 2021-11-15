<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderByDesc('created_at');
    }
    public function autor()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
