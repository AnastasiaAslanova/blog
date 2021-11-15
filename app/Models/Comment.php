<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Comment extends Model
{
    protected $fillable = ['post_id', 'content'];

    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}

