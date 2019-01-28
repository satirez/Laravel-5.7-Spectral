<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistence extends Model
{
     public function historial(){

    	return $this->hasMany(Historial::class);
    }
}
