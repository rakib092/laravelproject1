<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use HasFactory;
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }

    public function setTitleAttribute($title)
    {
        $this->attributes['title']=strtoupper($title);
    }

    public function setDescriptionAttribute($description)
    {
         $this->attributes['description']=strtoupper($description);
    }
    // public function tags(){
    //     return $this->belongsToMany(Tag::class);
    // }
}
