<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storerequest extends FormRequest
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
            'message'=>'required|max:250'
        ];
    }

    public function messages()
    {
        return[
        'name.required'=>'Il nome è obbligatorio',
        'name.min'=>'Il nome deve avere minimo 5 caratteri',
        'name.max'=>'Il nome supera i caratteri',
        'email.required'=>"L'indirizzo e-mail è obbligatorio",
        'message.required'=>'Il messaggio è obbligatorio',
        'message.max'=>'Il messaggio deve essere di massimo 250 caratteri',
   


        ];
    }
}
