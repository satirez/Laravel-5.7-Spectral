<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function institutions(){

    	return $this->hasMany(Institution::class);
    }

    public function users(){

    	return $this->hasMany(Users::class);
    }
}
