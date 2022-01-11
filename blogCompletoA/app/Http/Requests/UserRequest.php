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
            'name'=>'required|min:4|max:20',
            'email'=>'required|email:rfc,dns',
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return[
        'name.required'=>'il nome è obbligatorio',
        'name.min'=>'il nome deve avere minimo 5 caratteri',
        'name.max'=>'il nome supera i caratteri',
        'email.required'=>'email obbligatoria',
        'password.required'=>'password obbligatoria'
   


        ];
    }
}
