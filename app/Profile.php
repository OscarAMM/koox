<?php

namespace App;
use App\file_profile;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function files()
    {
        return $this->belongsToMany(File::class);
    }
}
