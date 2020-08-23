<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoCreateRequest extends FormRequest
{
    protected $redirectRoute = 'contacto';
    
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
            'correo' => 'required|email',
            'mensaje' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El :attribute es obligatorio.',
            'apellido.required' => 'El :attribute es obligatorio.',
            'telefono.required' => 'El :attribute es obligatorio.',
            'email.required' => 'El :attribute es obligatorio.',
            'mensaje.required' => 'El :attribute es obligatorio.',
        
            'email.email' => 'El :attribute debe tener un formato de correo valido.',
            
        ];
    }
}
