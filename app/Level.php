<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    public function expresiones(){

    	return $this->hasMany(Expresion::class);
    }
}
