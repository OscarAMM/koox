<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Ticket extends Model
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
