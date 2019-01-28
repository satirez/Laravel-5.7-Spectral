<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessionRequest extends FormRequest
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
            'psicologo_id' => 'required',
            'paciente_id' => 'required|unique:sessions',
            'enfermedad_id' => 'required',
            'terapia_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'alta' => 'required',

        ];
    }

    public function messages(){
        return [
            'psicologo_id.required' => 'No se ha seleccionado ningun Psicologo',
            'paciente_id.required' => 'No se ha seleccionado ningun Paciente',
            'enfermedad_id.required' => 'Por favor, rellenar campo de Enfermedad',
            'terapia_id.required' => 'La terapia esta vacia',
            'start_date.required' => 'Seleccione una fecha de inicio.',
            'end_date.required' => 'Seleccione una fecha de termino',
            'alta.required' => 'Rellene el alta del paciente',

            'paciente_id.unique' => 'El paciente ya tiene una sesion'
        ];
    }
}
