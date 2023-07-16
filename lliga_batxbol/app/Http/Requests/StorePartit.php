<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartit extends FormRequest
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
            'dataPartit'=>'required',
            'horaPartit'=>'required',
            'camp'=>'required', 
            'equipLocal'=>'required',
            'equipVisitant'=>'required',
            'equipVisitant'=>'different:equipLocal'
        ];
    }

  
    
    
    public function messages(){

        return [
            'dataPartit.required'=> "El camp Data és obligatori.",
            'horaPartit.required'=> "El camp Hora és obligatori.",
            'camp.required'=> "El camp Camp és obligatori.",
            'equipLocal.required'=> "El camp Equip Local és obligatori.",
            'equipVisitant.required'=> "El camp Equip Visitant és obligatori.",
            'equipVisitant.different'=>"Els dos equips han de ser diferents."
        ];

    }
}