<?php

namespace App;

use App\profile;

use Illuminate\Database\Eloquent\Model;

class file_profile extends Model {

    public function profile() {
        return $this->belongsToMany(profile::class);
    }

    public function hasProfile($id) {
        if ($this->profile()->where('profile_id', $id)->first()) {
            return true;
        } else {
            return false;
        }
    }
}
