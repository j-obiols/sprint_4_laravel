<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEquip extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //Aquí es valida si l'usuari té els permisos necessaris.
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
            'nom'=>'required',
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
            'nom.required'=> "El camp nom de l'equip és obligatori.",
            'entrenador.required'=> "El camp nom i cognom de l'entrenador és obligatori.",
            'email.required'=> "El camp email de l'entrenador és obligatori.",
            'capita.required'=> "El camp nom i cognom del capità és obligatori."
        ];

    }
}
