<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstitutionUpdateRequest extends FormRequest
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
            'direccion' => 'required',
            'rut' => 'unique:institutions|required|max:10'. $this->institution,
            'fono' => 'required|digits:9',
            'region_id' => 'required',
            'comuna_id' => 'required',
            'categoria_id' => 'required'
        ];
    }

     public function messages(){
        return [
            'name.required' => 'El Nombre esta vacio.',
            'direccion.required' => 'La dirreción esta vacia',
            'rut.required' => 'Por favor, rellenar el Rut',
            'fono.required' => 'El Nombre esta vacio.',
            'region_id.required' => 'El slug debe completarse.',
            'comuna_id.required' => 'Por favor, rellenar la información del Rol.',
            'categoria_id.required' => 'Por favor, rellenar la información del Rol.',

            'rut.unique' => 'El rut ya esta en uso'
        ];
    }
}
