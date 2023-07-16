<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\equip;
use Carbon\Carbon;

class partit extends Model
{
    use HasFactory;

    /*En aquest array es defineixen els camps que es poden
    omplir per assignació massiva.*/
    protected $fillable = ['dataPartit', 'horaPartit','camp', 'equipLocal', 
    'equipVisitant', 'golsEquipLocal', 'golsEquipVisitant'];

    //Aquí es definirien els camps protegits:
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

    /*public function estat($partit){
       
        if($partit -> pPendent = true) {
            $partit -> pPendent = "Pendent";
        } else {
            $partit-> pPendent = "Jugat";
        }
        
        return $partit;
    }*/


    public function resultat($partit){

        $equips = Equip::all();
        $equipLocal = Equip::where('nom', $partit->equipLocal)->first();
        $equipVisitant = Equip::where('nom', $partit->equipVisitant)->first();
        //return $equipLocal->entrenador;
        //return $partit->golsEquipVisitant;
         
        switch($partit->pPendent) {

            case 'Pendent':

                if ($partit->golsEquipLocal > $partit->golsEquipVisitant)  {

                    //$partit->golsEquipLocalOld=$partit->golsEquipLocal;
                    //$partit->golsEquipVisitantOld=$partit->golsEquipVisitant;
                       
                    $equipLocal->pJugats += 1;
                    $equipLocal->punts += 3;
                    $equipLocal->pGuanyats +=1;
                    $equipLocal->gFavor+=$partit->golsEquipLocal;
                    $equipLocal->gContra+=$partit->golsEquipVisitant;
                    
                    $equipVisitant->pJugats+=1;
                    $equipVisitant->pPerduts+=1;
                    $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                    $equipVisitant->gContra+=$partit->golsEquipLocal;
        
                    $partit->resultat="vLocal";
         
                } elseif($partit->golsEquipLocal < $partit->golsEquipVisitant) {
                    //$partit->golsEquipLocalOld=$partit->golsEquipLocal;
                    //$partit->golsEquipVisitantOld=$partit->golsEquipVisitant;
                    
                    $equipVisitant->pJugats+=1;
                    $equipVisitant->punts +=3;
                    $equipVisitant->pGuanyats+=1;
                    $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                    $equipVisitant->gContra+=$partit->golsEquipLocal;
        
                    $equipLocal->pJugats+=1;
                    $equipLocal->pPerduts+=1;
                    $equipLocal->gFavor+=$partit->golsEquipLocal;
                    $equipLocal->gContra+=$partit->golsEquipVisitant;
        
                    $partit->resultat="vVisitant";
                
                } elseif($partit->golsEquipLocal == $partit->golsEquipVisitant) {
                    //$partit->golsEquipLocalOld=$partit->golsEquipLocal;
                    //$partit->golsEquipVisitantOld=$partit->golsEquipVisitant;
                
                    $equipLocal->pJugats+=1;
                    $equipLocal->punts = $equipLocal->punts + 1;
                    $equipLocal->pEmpatats+=1;
                    $equipLocal->gFavor+=$partit->golsEquipLocal;
                    $equipLocal->gContra+=$partit->golsEquipVisitant;
        
                    $equipVisitant->pJugats+=1;
                    $equipLocal->punts = $equipLocal->punts + 1;
                    $equipVisitant->pEmpatats+=1;
                    $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                    $equipVisitant->gContra+=$partit->golsEquipLocal;
        
                    $partit->resultat="empat";
                    
                }

                $partit->pPendent= 'Jugat';
                        
            break;

            case 'Jugat':

                switch ($partit->resultat) {

                    case 'vLocal': 
                        if($partit->golsEquipLocal < $partit->golsEquipVisitant) {

                            $equipLocal->punts-=3;
                            $equipVisitant->punts+=3;

                            $equipLocal->pGuanyats-=1;
                            $equipVisitant->pGuanyats+=1;

                            $equipLocal->pPerduts+=1;
                            $equipVisitant->pPerduts-=1;

                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant;
            
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;
            
                            $partit->resultat="vVisitant";
                        } elseif($partit->golsEquipLocal == $partit->golsEquipVisitant) {
                
                            $equipLocal->punts-=3;
                            $equipLocal->punts+=1;
                            $equipLocal->pGuanyats-=1;
                            $equipLocal->pEmpatats+=1;
                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant; 
            
                            $equipVisitant->punts+=1;
                            $equipVisitant->pPerduts-=1;
                            $equipVisitant->pEmpatats+=1;
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;
            
                            $partit->resultat="empat";
                        
                        }elseif($partit->golsEquipLocal > $partit->golsEquipVisitant) {
                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant; 
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;
                        }
                    break;
                     
                    case 'vVisitant':

                        if($partit->golsEquipLocal > $partit->golsEquipVisitant) {
            
                            $equipLocal->punts+=3;
                            $equipVisitant->punts-=3;

                            $equipLocal->pGuanyats+=1;
                            $equipVisitant->pGuanyats-=1;

                            $equipLocal->pPerduts-=1;
                            $equipVisitant->pPerduts+=1;

                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant;
               
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;

                            $partit->resultat="vLocal";
                        
                        } elseif($partit->golsEquipLocal == $partit->golsEquipVisitant) {
            
                            $equipVisitant->punts-=3;
                            $equipVisitant->punts+=1;
                            $equipVisitant->pGuanyats-=1;
                            $equipVisitant->pEmpatats+=1;
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant; 
                            $equipVisitant->gContra+=$partit->golsEquipLocal;
            
                            $equipLocal->punts+=1;
                            $equipLocal->pPerduts-=1;
                            $equipLocal->pEmpatats+=1;
                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant;
            
                            $partit->resultat="empat";

                        }elseif($partit->golsEquipLocal < $partit->golsEquipVisitant) {

                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant; 
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;

                        }


                    break;

                    case 'empat':

                        if($partit->golsEquipLocal > $partit->golsEquipVisitant) {
            
                            $equipLocal->punts+=2;
                            $equipVisitant->punts-=1;

                            $equipLocal->pEmpatats-=1;
                            $equipLocal->pGuanyats+=1;
                            
                            $equipVisitant->pEmpatats-=1; 
                            $equipVisitant->pPerduts+=1;

                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant;
               
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;

                            $partit->resultat="vLocal";

                        } elseif($partit->golsEquipLocal < $partit->golsEquipVisitant){

                            $equipLocal->punts-=1;
                            $equipVisitant->punts+=2;

                            $equipLocal->pEmpatats-=1;
                            $equipLocal->pPerduts+=1;
                            
                            $equipVisitant->pEmpatats-=1; 
                            $equipVisitant->pGuanyats+=1;

                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant;
               
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;

                            $partit->resultat="vVisitant";
                            
                        } elseif($partit->golsEquipLocal == $partit->golsEquipVisitant) {

                            $equipLocal->gFavor-=$partit->golsEquipLocalOld;
                            $equipLocal->gContra-=$partit->golsEquipVisitantOld;
                            $equipLocal->gFavor+=$partit->golsEquipLocal;
                            $equipLocal->gContra+=$partit->golsEquipVisitant; 
                            $equipVisitant->gFavor-=$partit->golsEquipVisitantOld;
                            $equipVisitant->gContra-=$partit->golsEquipLocalOld;
                            $equipVisitant->gFavor+=$partit->golsEquipVisitant;
                            $equipVisitant->gContra+=$partit->golsEquipLocal;

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

}
