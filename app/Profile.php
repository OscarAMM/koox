<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\file_profile;

class Profile extends Model {

    public function users() {
        return $this->belongsToMany(User::class);
    }
    public function file_profile() {
        return $this->belongsToMany(file_profile::class);
    }
    public function hasFile($id){
        if($this->files()->where('file_id', $id)->first()){
            return true;
        }else{
            return false;
        }
    }
}
