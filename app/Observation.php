<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = [

		'psicologo_id','sesion_id','descripcion','level_id','fecha'
	];
}
