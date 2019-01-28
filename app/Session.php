<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'psicologo_id', 'paciente_id', 
        'enfermedad_id', 'terapia_id', 
        'start_date', 'end_date', 
        'motivoconsulta', 'diagnostico', 
        'medicado', 'derivadode', 
        'alta', 'severidad',
    ];

	public function psicologo(){

    	return $this->belongsTo(User::class,'psicologo_id');
    }

  public function paciente(){

      return $this->belongsTo(User::class,'paciente_id');
    }

   public function expresiones(){

    	return $this->belongsTo(Expresion::class);
    }

   public function enfermedad(){

    	return $this->belongsTo(Disease::class,'enfermedad_id');
    }

   public function terapia(){

    	return $this->belongsTo(Terapy::class,'terapia_id');
    }

    public function derivadode(){

      return $this->belongsTo(Derivado::class,'derivadode_id');
    }

    public function orientacion(){

      return $this->belongsTo(SexualOrientation::class,'sexualorientation_id');
    }

    public function estadocivil(){

      return $this->belongsTo(CivilState::class,'civilstate_id');
    }

    public function historial(){

      return $this->hasMany(Historial::class);
    }
}
