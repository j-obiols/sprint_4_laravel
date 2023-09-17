<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equip extends Model
{
    use HasFactory;

    /*En aquest array es defineixen els camps que es poden
    omplir per assignació massiva.*/
    protected $fillable = ['nom', 'entrenador','email', 'capita'];

    //Aquí es definirien els camps protegits:
    protected $guarded = [];
    
    
    //Relació un a molts
    public function partitsLocals(){
        return $this->hasMany('App\Models\Partits', 'equip_local_id');
    }


    //Relació un a molts
    public function partitsVisitant(){
        return $this->hasMany('App\Models\Partits', 'equip_visitant_id');
    }


   
   
}
