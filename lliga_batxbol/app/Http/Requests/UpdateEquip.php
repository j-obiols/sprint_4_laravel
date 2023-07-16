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
            'entrenador'=>'required',
            'email'=>'required',
            'capita'=>'required'
        ];
    }

    /* public function attributes(){
        //return
    }*/

    public function messages(){

        return [
            'entrenador.required'=> "El camp Nom de l'entrenador és obligatori.",
            'email.required'=> "El camp Email de l'entrenador és obligatori.",
            'capita.required'=> "El camp nom i cognom del capità és obligatori."
        ];

    }
}
