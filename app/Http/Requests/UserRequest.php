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
            'name'=>'required | string',
            'email' => 'required',
            'password' => 'required | min:6 | confirmed',

        ];
    }
    public function messages(){
        return [
            'name.required' => "Ingresa el nombre de usuario.",
            'name.string' => "El nombre de usuario debe ser escrito con caracteres y no incluir números",
            'email.required'=>"Se debe ingresar un correo electrónico.",
            'password.required'=>"Se debe ingresar una contraseña.",
            'password.min' => 'La contraseña debe ser de al menos 6 caracteres.',
            'password.confirmed'=>'La contraseña no es la misma.'      
        ];
    }
}
