<?php

namespace App\Http\Controllers;

use App\Models\Equip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//Indiquem que utilitzi les normes de validació descrites en els arxius Request:
use App\Http\Requests\StoreEquip;
use App\Http\Requests\UpdateEquip;

class EquipController extends Controller
{
    public function index(){

        //$equips = Equip::paginate();
        $equips = Equip::orderBy('nom')->paginate();

        //return $equips;

        return view('equips.index', compact('equips'));
    }

    public function classificacio(){

        $equips = Equip::orderBy('punts', 'desc')->paginate();

        //return $equips;

        return view('equips.classificacio', compact('equips'));
    }

    public function create(){
        return view('equips.create');
    }

    public function store(StoreEquip $request){

        $equip = Equip::Create($request->all());

        return redirect()->route('equips.show', $equip->id);
    }

    public function show(Equip $equip){
    
        return view('equips.show', compact('equip'));

    }

    public function edit(Equip $equip){
    
        return view('equips.edit', compact('equip'));

    }

    public function update(UpdateEquip $request, Equip $equip) {

        //$equip->nom = $request->nom;
        $equip->entrenador = $request->entrenador;
        $equip->email = $request->email;
        $equip->capita = $request->capita;
        //return $equip;
        $equip->save();

        //Assignació massiva per estalviar codi:
        //$equip->update($request->all());


        return view('equips.show', compact('equip'));
    }

    public function destroy(Equip $equip){
        
        /*$equip->delete();

        return redirect()->route('equips.index');*/
        
        $message = "(*) No es pot eliminar un equip mentre la lliga està activa.";

        return back()->withErrors($message);
         
    }
    
}
