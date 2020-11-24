<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\File;
use App\User;

class Forum extends Model
{
    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }
    public function files()
    {
        return $this->belongsToMany(File::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
