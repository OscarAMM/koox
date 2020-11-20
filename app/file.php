<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Document;

class file extends Model
{
    //
    public function document(){
        return $this->belongsToMany(document::class);
    }
}
