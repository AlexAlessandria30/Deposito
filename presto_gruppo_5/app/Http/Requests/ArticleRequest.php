<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title'=>'required|min:4|max:20',
            'price'=>'required|',
            'description'=>'required|max:500',
            /* 'images' => 'required' */
           
            
        ];
    }

    public function messages()
    {
        return[
        'title.required'=>'Il titolo è obbligatorio',
        'title.min'=>'Il titolo deve avere minimo 5 caratteri',
        'title.max'=>'Il titolo non deve superare i 20 caratteri',
        'price.required'=>"Il prezzo è obbligatorio",
        'description.required'=>'La descrizione è obbligatorio',
        'description.max'=>'La descrizione deve essere di massimo 500 caratteri',
        
   


        ];
    }
}
