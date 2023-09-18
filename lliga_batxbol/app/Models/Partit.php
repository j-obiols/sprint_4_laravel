<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\equip;
use Carbon\Carbon;

class partit extends Model {

    use HasFactory;

    
    protected $fillable = ['dataPartit', 'horaPartit','camp', 'equip_local_id', 
    'equip_visitant_id', 'golsEquipLocal', 'golsEquipVisitant'];


    protected $guarded = [];
    

    public function data($partit){
        $data = $partit -> dataPartit;
        $parts = explode('-', $data); 
        $dataPant = "{$parts[2]}-{$parts[1]}-{$parts[0]}";
        return $dataPant;
    }


    public function hora($partit){
        $hora = $partit -> horaPartit;
        $parts = explode(':', $hora); 
        $horaPant = "{$parts[0]}:{$parts[1]}";
        return $horaPant;
    }

   
    public function gestionarResultat($partit){

        $equipLocal = $partit->obtenirEquipLocal;
        $equipVisitant = $partit->obtenirEquipVisitant;
       
        switch($partit->pPendent) {

            case 'Pendent': 

                $equipLocal -> sumarPartitJugat();
                $equipVisitant -> sumarPartitJugat(); 

                comptabilitzarGolsPartit($partit, $equipLocal, $equipVisitant);

                if ($partit->golsEquipLocal > $partit->golsEquipVisitant)  {

                    $equipLocal->sumarVictoria();
                    $equipVisitant -> sumarDerrota();
                    $partit->resultat="vLocal";
         
                } elseif($partit->golsEquipLocal < $partit->golsEquipVisitant) {
                
                    $equipVisitant -> sumarVictoria();
                    $equipLocal -> sumarDerrota();
                    $partit->resultat="vVisitant";
                
                } elseif($partit->golsEquipLocal == $partit->golsEquipVisitant) {
                    
                    $equipLocal -> sumarEmpat();
                    $equipVisitant -> sumarEmpat();
                    $partit->resultat="empat";
                    
                }

                $partit->pPendent= 'Jugat';
                        
            break;

            case 'Jugat':
                
                modificarComptadorGols($partit, $equipLocal, $equipVisitant);

                switch ($partit->resultat) {
 
                    case 'vLocal': 
                        if($partit->golsEquipLocal < $partit->golsEquipVisitant) {

                            passarVictLocalAvictVisitant($equipLocal, $equipVisitant);
                            $partit->resultat="vVisitant";

                        } elseif($partit->golsEquipLocal == $partit->golsEquipVisitant) {

                            passarVictLocalAempat($equipLocal, $equipVisitant);
                            $partit->resultat="empat";
                        
                        }
                    break;
                     
                    case 'vVisitant':

                        if($partit->golsEquipLocal > $partit->golsEquipVisitant) {
            
                            passarVictoriaVisitantALocal($equipLocal, $equipVisitant);
                            $partit->resultat="vLocal";
                        
                        } elseif($partit->golsEquipLocal == $partit->golsEquipVisitant) {
            
                            passarVictoriaVisitantAempat($equipLocal, $equipVisitant); 
                            $partit->resultat="empat";

                        }

                    break;

                    case 'empat':

                        if($partit->golsEquipLocal > $partit->golsEquipVisitant) {

                            passarEmpatAvictoriaLocal($equipLocal, $equipVisitant);
                            $partit->resultat="vLocal";

                        } elseif($partit->golsEquipLocal < $partit->golsEquipVisitant){

                            passarEmpatAvictoriaVisitant($equipLocal, $equipVisitant); 
                            $partit->resultat="vVisitant";
                            
                        } 
                        
                    break;
                 //end of switch($partit->resultat) 
                } 
                
            break;
 
         //end of switch($partit->pPendent)       
        }

        $partit->golsEquipLocalOld=$partit->golsEquipLocal;
        $partit->golsEquipVisitantOld=$partit->golsEquipVisitant; 
        $equipLocal->save();
        $equipVisitant->save();  
        $partit->save();
       
    }


    public function obtenirEquipLocal(){

       return $this->belongsTo('App\Models\Equip', 'equip_local_id');
       
    }


    public function obtenirEquipVisitant() {

       return $this->belongsTo('App\Models\Equip', 'equip_visitant_id');
    }

}
