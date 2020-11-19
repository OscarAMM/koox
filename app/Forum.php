<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
