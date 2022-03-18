<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:120',
            'description' => 'required|max:500',
            'ingrediants' => 'required|max:500',
        
        ];
    }
    public function messages()
    {
        return [
            'title.required' => "Il titolo dell'annuncio è obbligatorio",
            'description.required' => "La descrizione dell'annuncio è obbligatoria",
            'ingrediants.required'=> "E' necessario inserire almeno un ingrediente"
        ];
    }
}