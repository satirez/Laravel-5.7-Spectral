<?php

namespace App;


use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
use App\Institution;
use App\UserType;


class User extends Authenticatable
{

  
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'apellidos', 'email', 'password', 'rut', 'telefono', 'sexo', 'fechanacimiento', 'region_id', 'comuna_id', 'direccion', 'nivelse_id', 'fonasa_id', 'estado', 'user_types_id', 'institute_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
    public function nivelse(){

        return $this->belongsTo(SocioEconomic::class,'nivelse_id');
    }

    public function fonasa(){

        return $this->belongsTo(Fonasa::class,'fonasa_id');
    }

    public function region(){

        return $this->belongsTo(Region::class,'region_id');
    }

    public function comuna(){

        return $this->belongsTo(Commune::class,'comuna_id');
    }

      public function lugar(){

        return $this->belongsTo(Institution::Class,'institute_id');
    }
    
     public function tipo(){

        return $this->belongsTo(UserType::class,'user_types_id');
    }

     public function terapia(){

        return $this->hasMany(Terapy::class);
    }

    public function setPasswordAttribute($value)
    {
      $this->attributes['password'] = bcrypt($value);
    }

}
