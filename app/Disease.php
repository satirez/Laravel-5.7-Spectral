<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    public function sesiones(){

    	return $this->hasMany(Session::class);
    }
}
