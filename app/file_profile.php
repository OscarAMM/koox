<?php

namespace App;
use App\profile;

use Illuminate\Database\Eloquent\Model;

class file_profile extends Model
{
    //
    public function profile()
    {
        return $this->belongsTo(profile::class);
    }
}
