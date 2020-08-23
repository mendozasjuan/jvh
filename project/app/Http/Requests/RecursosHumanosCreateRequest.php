<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecursosHumanosCreateRequest extends FormRequest
{
    protected $redirectRoute = 'recursoshumanos';
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
           'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'pais' => 'required',
            'nacionalidad' => 'required',
            'dni' => 'required',
            'dia' => 'required|numeric|min:1|max:31',
            'mes' => 'required|numeric|min:1|max:12',
            'ano' => 'required|numeric',
            'foto' => 'required|mimes:jpeg,jpg,png|file|max:5120',
            'curriculum' => 'required|mimes:doc,pdf'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El :attribute es obligatorio.',
            'apellido.required' => 'El :attribute es obligatorio.',
            'telefono.required' => 'El :attribute es obligatorio.',
            'email.required' => 'El :attribute es obligatorio.',
            'pais.required' => 'El :attribute es obligatorio.',
            'nacionalidad.required' => 'El campo :attribute es obligatorio.',
            'dni.required' => 'El :attribute es obligatorio.',
            'dia.required' => 'El :attribute es obligatorio.',
            'mes.required' => 'El :attribute es obligatorio.',
            'ano.required' => 'El año es obligatorio.',
            'foto.required' => 'El Campo :attribute es obligatorio.',
            'curriculum.required' => 'El :attribute es obligatorio.',

            'email.email' => 'El :attribute debe tener un formato de correo valido.',
            'dia.numeric' => 'El :attribute debe ser un valor numerico.',
            'mes.numeric' => 'El :attribute debe ser un valor numerico.',
            'ano.numeric' => 'El año debe ser un valor numerico.',
            'dia.min' => 'El valor de :attribute debe ser minimo 1.',
            'mes.min' => 'El valor de :attribute debe ser minimo 1.',
            'dia.max' => 'El valor de :attribute debe ser maximo 31',
            'mes.max' => 'El valor de :attribute debe ser minimo 12',

            'foto.mimes' => 'La :attribute debe tener formato jpg o png',
            'foto.max' => 'El Tamaño de la :attribute no puede tener mas de 5mb',
            'curriculum.mimes' => 'El :attribute debe tener formato doc o pdf',
        ];
    }
}


       