<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expresion extends Model
{
    public function categoria(){

        return $this->belongsTo(CategoryExpresion::class,'fonasa_id');
    }


    public function nivel(){

        return $this->belongsTo(Level::class,'fonasa_id');
    }
}
