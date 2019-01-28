<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commune extends Model
{
    public function institutions(){

    	return $this->hasMany(Institution::class);
    }

    public function users(){

    	return $this->hasMany(Users::class);
    }
}
