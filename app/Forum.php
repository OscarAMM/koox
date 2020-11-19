<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\File;
class Forum extends Model
{

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function files()
    {
        return $this->belongsToMany(File::class);
    }
}
