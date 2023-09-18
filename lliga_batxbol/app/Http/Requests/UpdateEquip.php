<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEquip extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'entrenador'=>'required|string|regex:/^([^0-9]*)$/',
            'email'=>'required|email',
            'capita'=>'required|string|regex:/^([^0-9]*)$/',
        ];
    }

    /* public function attributes(){
        //return
    }*/

    public function messages(){

        return [
            'entrenador.required'=> "El camp Nom de l'entrenador és obligatori.",
            'entrenador.string'=> "Si-us-plau, introdueixi un nom d'entrenador vàlid.",
            'entrenador.regex'=> "Si-us-plau, introdueixi un nom d'entrenador vàlid.",
            'email.required'=> "El camp Email de l'entrenador és obligatori.",
            'email.email'=> "Si-us-plau, introdueixi un email vàlid.",
            'capita.required'=> "El camp nom i cognom del capità és obligatori.",
            'capita.string'=> "Si-us-plau, introdueixi un nom de capità vàlid.",
            'capita.regex'=> "Si-us-plau, introdueixi un nom de capità vàlid."
        ];

    }
}
