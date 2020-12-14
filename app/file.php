<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Document;
use App\Comment;
use App\Subcomment;
use App\Faq;

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
    public function faq(){
        return $this->belongsToMany(Faq::class, 'faq_file');
    }
}
