<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\file;

class Faq extends Model
{
    public function files(){
        return $this->belongsToMany(file::class, 'faq_file');
    }
}
