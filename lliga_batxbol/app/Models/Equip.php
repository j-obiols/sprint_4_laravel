<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equip extends Model {

    use HasFactory;

   
    protected $fillable = ['nom', 'entrenador','email', 'capita'];


    protected $guarded = [];
    
    
    //Relació un a molts
    public function partitsLocals(){
        return $this->hasMany('App\Models\Partits', 'equip_local_id');
    }


    //Relació un a molts
    public function partitsVisitant(){
        return $this->hasMany('App\Models\Partits', 'equip_visitant_id');
    }


    //Funcions auxiliars per a la gestió de resultats d'un partit
    public function sumarPartitJugat(){
        $this -> pJugats +=1;
    }


    public function sumarVictoria(){
        $this -> punts += 3;
        $this -> pGuanyats += 1;
    }


    public function restarVictoria(){
        $this -> punts -= 3;
        $this -> pGuanyats -= 1;
    }


    public function sumarDerrota(){
        $this -> pPerduts += 1;
    }


    public function restarDerrota(){
        $this -> pPerduts -= 1;
    }


    public function sumarEmpat(){
        $this -> punts += 1;
        $this -> pEmpatats += 1;
    }

    public function restarEmpat(){
        $this -> punts -= 1;
        $this -> pEmpatats -= 1;
    }

}
 

//Més funcions auxiliars per a la gestió de resultats d'un partit   
function passarVictLocalAvictVisitant($equipLocal, $equipVisitant){
        
    $equipLocal -> restarVictoria();
    $equipLocal -> sumarDerrota();
    $equipVisitant -> sumarVictoria();
    $equipVisitant ->restarDerrota();

}

function passarVictLocalAempat($equipLocal, $equipVisitant){
        
    $equipLocal -> restarVictoria();
    $equipLocal -> sumarEmpat();
    $equipVisitant -> restarDerrota();
    $equipVisitant ->sumarEmpat();
}

function passarVictoriaVisitantALocal($equipLocal, $equipVisitant) {

    $equipLocal -> sumarVictoria();
    $equipLocal -> restarDerrota();
    $equipVisitant -> restarVictoria();
    $equipVisitant ->sumarDerrota();
  
}


function passarVictoriaVisitantAempat($equipLocal, $equipVisitant) {

    $equipLocal -> restarDerrota();
    $equipLocal -> sumarEmpat();
    $equipVisitant -> restarVictoria();
    $equipVisitant ->sumarEmpat();
  
}


function passarEmpatAvictoriaLocal($equipLocal, $equipVisitant) {

    $equipLocal -> sumarVictoria();
    $equipLocal -> restarEmpat();
    $equipVisitant -> sumarDerrota();
    $equipVisitant ->restarEmpat();
  
}


function passarEmpatAvictoriaVisitant($equipLocal, $equipVisitant) {

    $equipLocal -> sumarDerrota();
    $equipLocal -> restarEmpat();
    $equipVisitant -> sumarVictoria();
    $equipVisitant ->restarEmpat();
  
}


function comptabilitzarGolsPartit ($partit, $equipLocal, $equipVisitant){

    $equipLocal->gFavor += $partit->golsEquipLocal;
    $equipLocal->gContra += $partit->golsEquipVisitant;
    $equipVisitant->gFavor += $partit->golsEquipVisitant;
    $equipVisitant->gContra += $partit->golsEquipLocal;
   
}


function modificarComptadorGols($partit, $equipLocal, $equipVisitant){

    $equipLocal->gFavor -= $partit->golsEquipLocalOld;
    $equipLocal->gContra -= $partit->golsEquipVisitantOld;
    $equipLocal->gFavor += $partit->golsEquipLocal;
    $equipLocal->gContra += $partit->golsEquipVisitant;
               
    $equipVisitant->gFavor -= $partit->golsEquipVisitantOld;
    $equipVisitant->gContra -= $partit->golsEquipLocalOld;
    $equipVisitant->gFavor += $partit->golsEquipVisitant;
    $equipVisitant->gContra += $partit->golsEquipLocal;
   
}

