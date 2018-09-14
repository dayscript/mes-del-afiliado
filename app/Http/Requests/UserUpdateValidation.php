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
            'email' => 'required|email'
        ];
    }


    public function messages()
    {
        return [
            'first_name.required' => 'El :attribute es obligatorio.',
            'email.required' => 'Añade un :attribute al producto',
            'email.unique' => 'ya hay un usuarios cosndakdjlakd :attribute al producto',

        ];
    }

}
