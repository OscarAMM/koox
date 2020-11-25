<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;
use App\Forum;
use App\User;
use App\Subcomment;


class Comment extends Model
{
    public function files()
    {
        return $this->belongsToMany(File::class);
    }
    public function forums()
    {
        return $this->belongsToMany(Forum::class);
    }
    public function subcomments()
    {
        return $this->hasMany(Subcomment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function hasFile($id)
    {
        if ($this->files()->where('file_id', $id)->first()) {
            return true;
        } else {
            return false;
        }
    }
}
