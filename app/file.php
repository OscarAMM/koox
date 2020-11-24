<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Document;

class file extends Model
{
    public function document()
    {
        return $this->belongsToMany(document::class);
    }
    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function subcomments()
    {
        return $this->belongsToMany(Subcomment::class);
    }
}
