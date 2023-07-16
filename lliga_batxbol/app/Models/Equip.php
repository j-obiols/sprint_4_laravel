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

   
}
