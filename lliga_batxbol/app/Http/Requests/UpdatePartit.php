<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePartit extends FormRequest
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
            'golsEquipLocal'=>'required|numeric|min:0', 
            'golsEquipVisitant'=>'required|numeric|min:0'
            //'equipLocal'=>'required',
            //'equipVisitant'=>'required'
        ];   
    }
    
    public function messages(){

        return [
            'dataPartit.required'=> "El camp Data és obligatori.",
            'horaPartit.required'=> "El camp Hora és obligatori.",
            'camp.required'=> "El camp Camp és obligatori.",
            'golsEquipLocal.required'=> "Aquest camp és obligatori. Si el partit no s'ha celebrat, elimina'l i crea'l de nou.",
            'golsEquipVisitant.required'=> "Aquest camp és obligatori. Si el partit no s'ha celebrat, elimina'l i crea'l de nou.",
            'golsEquipLocal.numeric'=> "Introdueix un valor correcte.",
            'golsEquipLocal.min'=> "El nombre de gols ha de ser igual o més gran que 0.",
            'golsEquipVisitant.numeric'=> "Introdueix un valor correcte.",
            'golsEquipVisitant.min'=> "El nombre de gols ha de ser igual o més gran que 0."
            //'equipLocal.required'=> "El camp Equip Local és obligatori.",
            //'equipVisitant.required'=> "El camp Equip Visitant és obligatori."
        ];

    }

}
