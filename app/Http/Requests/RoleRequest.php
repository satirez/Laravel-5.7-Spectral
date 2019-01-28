<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required'
        ];
    }


    public function messages(){
        return [
            'name.required' => 'El Nombre esta vacio.',
            'slug.required' => 'El slug debe completarse.',
            'description.required' => 'Por favor, rellenar la información del Rol.',
        ];
    }
}
