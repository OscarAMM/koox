<?php

namespace App;
use App\file_profile;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public function file_profile()
    {
        return $this->belongsToMany(file_profile::class);
    }
}
