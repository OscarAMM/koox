<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function forums()
    {
        return $this->belongsToMany(Forum::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
