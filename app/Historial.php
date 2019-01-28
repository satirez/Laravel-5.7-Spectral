<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model
{	

	protected $fillable = [

		'sesion_id','asistencia_id','start_date','end_date','duracion'
	];


    public function asistencia(){

    	return $this->belongsTo(Asistence::class,'asistencia_id');
    }

      public function sesion(){

    	return $this->belongsTo(Session::class,'sesion_id');
    }
}
