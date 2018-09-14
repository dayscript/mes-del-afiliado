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
            'first_name' => 'required',
            'last_name' => 'required',
            //'identification' => 'required|unique',
            'city' => 'required',
            'affiliate_time' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'mobile' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'El campo Nombres es obligatorio.',
            'last_name.required' => 'El campo Apellidos es obligatorio.',
            //'identification.required' => 'El campo No Documento es obligatorio.',
            'city.required' => 'El campo Ciudad es obligatorio.',
            'affiliate_time.required' => 'El campo Tiempo afiliado es obligatorio.',
            'email.required' => 'El campo Correo electrónico es obligatorio.',
            'email.email' => 'El Correo electrónico debe ser una dirección de correo electrónico válida.',
            'phone.required' => 'El campo Teléfono es obligatorio.',
            'mobile.required' => 'El campo Celular es obligatorio.',
        ];
    }

}
