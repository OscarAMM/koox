<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function file_profile() {
        return $this->belongsToMany(file_profile::class);
    }
}
