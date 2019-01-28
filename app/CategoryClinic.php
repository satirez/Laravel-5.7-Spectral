<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryClinic extends Model
{
    public function institutions(){

    	return $this->hasMany(Institution::class);
    }
}
