<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryExpresion extends Model
{
    public function expresiones(){

    	return $this->hasMany(Expresion::class);
    }
}
