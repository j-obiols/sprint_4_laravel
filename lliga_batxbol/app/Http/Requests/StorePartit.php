<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Equip;

class StorePartit extends FormRequest {

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
            'camp'=>'required|string|regex:/^([^0-9]*)$/',
            'equip_local_id'=>'required',
            'equip_visitant_id'=>'required',
            'equip_visitant_id'=>'different:equip_local_id'
        ];
    }

  
    
    
    public function messages(){

        return [
            'dataPartit.required'=> "El camp Data és obligatori.",
            'horaPartit.required'=> "El camp Hora és obligatori.",
            'camp.required'=> "El camp Camp és obligatori.",
            'camp.string'=> "Si-us-plau, introdueixi un nom de camp vàlid.",
            'camp.regex'=> "Si-us-plau, introdueixi un nom de camp vàlid.",
            'equip_local_id.required'=> "El camp Equip Local és obligatori.",
            'equip_visitant_id.required'=> "El camp Equip Visitant és obligatori.",
            'equip_visitant_id.different'=>"Els dos equips han de ser diferents."
        ];

    }
}