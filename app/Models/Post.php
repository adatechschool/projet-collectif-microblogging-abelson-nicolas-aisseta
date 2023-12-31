<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'caption',
        'user_id',   
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }


   

    public function likers()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}




