<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocioEconomic extends Model
{
    public function users(){

    	return $this->hasMany(Users::class);
    }
}
