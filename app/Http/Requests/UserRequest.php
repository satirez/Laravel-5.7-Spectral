<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:40',
            'apellidos' => 'required|max:40',
            'email' => 'unique:users|required',
            'password' => 'required|min:6',
            'rut' => 'unique:users|required|min:10|max:10',
            'fono' => 'digits:9',
            'sexo' => 'required',
            'fechanacimiento' => 'required',
            'region_id' => 'required',
            'comuna_id' => 'required',
            'direccion' => 'required',
            'estado' => 'required',
            'user_types_id' => 'required',
            'institute_id' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'El Nombre esta vacio',
            'apellidos.required' => 'El Apellido esta vacio',
            'email.required' => 'Por favor, rellenar campo E-Mail',
            'rut.required' => 'El Rut esta vacio',
            'fono.required' => 'Por favor, dicte un numero de contacto',
            'sexo.required' => 'Seleccione sexo Biologico del paciente',
            'fechanacimiento.required' => 'Seleccione una fecha de nacimiento',
            'region_id.required' => 'Seleccione una region',
            'comuna_id.required' => 'Seleccione una comuna',
            'estado.required' => 'Estado indefinido, por favor seleccionar',
            'user_types_id.required' => 'Seleccione un tipo de usuario',
            'direccion.required' => 'La dirección esta vacia',
            'institute_id.required' => 'El instituto esta vacio',

            'fono.digits' => 'Solo digitos',
            'password.max' => 'La contraseña debe tener más de :min caracteres',
            'rut.min' => 'El rut debe ser correcto',
            'rut.unique' => 'El Rut ya esta en uso',
            'email.unique' => 'El e-mail ya esta en uso',
        ];
    }
}
