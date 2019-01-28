<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{

	protected $fillable = [

		'name','direccion','rut','region_id','comuna_id','lat','lng','fono','sitioweb','logo','categoria_id'
	];

	public function reg(){

    	return $this->belongsTo(Region::class,'region_id');
    }

    public function com(){

    	return $this->belongsTo(Commune::class,'comuna_id');
    }


    public function categoria(){

    	return $this->belongsTo(CategoryClinic::class);
    }

    public function users(){

    	return $this->hasMany(User::class);
    }


}
