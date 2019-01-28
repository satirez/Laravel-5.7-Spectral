<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terapy extends Model
{
    public function sesiones(){

    	return $this->hasMany(Session::class);
    }
}
