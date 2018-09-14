<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class UserUpdateValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {
         //Auth::user()->hasRole('Admin');
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
            'first_name' => 'required|regex:/^[A-Za-z\s]+$/u',
            'last_name' => 'required|regex:/^[A-Za-z\s]+$/u',
            'city' => 'required',
            'affiliate_time' => 'required|numeric',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'mobile' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'El campo Nombres es obligatorio.',
            'first_name.regex' => 'El campo Nombre contiene caracteres no permitidos.',
            'last_name.required' => 'El campo Apellidos es obligatorio.',
            'last_name.regex' => 'El campo Apellidos contiene caracteres no permitidos.',
            'city.required' => 'El campo Ciudad es obligatorio.',
            'affiliate_time.required' => 'El campo Tiempo afiliado es obligatorio.',
            'affiliate_time.numeric' => 'El campo Tiempo afiliado debe ser numérico.',
            'email.required' => 'El campo Correo electrónico es obligatorio.',
            'email.email' => 'El Correo electrónico debe ser una dirección de correo electrónico válida.',
            'phone.required' => 'El campo Teléfono es obligatorio.',
            'phone.numeric' => 'El campo Teléfono debe ser numérico.',
            'mobile.required' => 'El campo Celular es obligatorio.',
            'mobile.numeric' => 'El campo Celular debe ser numérico.',
        ];
    }

}
