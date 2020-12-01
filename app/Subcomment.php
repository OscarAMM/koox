<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;
use App\User;
use App\Comment;

class Subcomment extends Model {

    public function files() {
        return $this->belongsToMany(File::class, 'subcomment_file');
    }
    public function comments() {
        return $this->belongsTo(Comment::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function hasFile($id) {
        if ($this->files()->where('file_id', $id)->first()) {
            return true;
        } else {
            return false;
        }
    }
}
