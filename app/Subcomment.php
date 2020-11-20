<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcomment extends Model
{
    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
