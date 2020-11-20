<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\File;

class document extends Model
{
    //
    public function files(){
        return $this->belongsToMany(File::class);
    }
    public function hasFile($id){
        if($this->files()->where('file_id', $id)->first()){
            return true;
        }else{
            return false;
        }
    }

}
