<?php

namespace App\Http\Controllers;

use App\Models\Partit;
use App\Models\Equip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/*Indiquem que utilitzi les normes de validació descrites en els arxius Request:*/
use App\Http\Requests\StorePartit;
use App\Http\Requests\UpdatePartit;

class PartitController extends Controller
{
    public function index(){

        /*foreach($partits as $partit) {

            if($partit -> pPendent = true) {
                $partit -> pPendent = "Pendent";
            } else {
                $partit-> pPendent = "Jugat";
            }
            
            return $partits;   
        }*/

        $partits = Partit::paginate();

        return view('partits.index', compact('partits'));
    }

    public function calendari(){

        $partits = Partit::orderBy('dataPartit')->paginate();

        //return $equips;

        return view('partits.calendari', compact('partits'));
    }

    public function resultats(){

        $partits = Partit::orderBy('dataPartit')->paginate();

        //return $equips;

        return view('partits.resultats', compact('partits'));
    }

    public function create(){

        $equips = Equip::all();

        return view('partits.create', compact('equips'));
    }

    public function store(StorePartit $request){

        //Assignació massiva per estalviar codi:
        $partit = Partit::Create($request->all());
        
    
        //return redirect()->route('partits.show', $partit->id);
        return redirect()->route('partits.index');
    }

    public function show(Partit $partit){
        return view('partits.show', compact('partit'));
    }

    public function edit(Partit $partit){

        return view('partits.edit', compact('partit'));
    }

    public function update(UpdatePartit $request, Partit $partit) {

        $partit->dataPartit = $request->dataPartit;
        $partit->horaPartit = $request->horaPartit;
        $partit->camp = $request->camp;
        $partit->golsEquipLocal = $request->golsEquipLocal;
        $partit->golsEquipVisitant = $request->golsEquipVisitant;
        $partit->resumPartit = $request->resumPartit;
        $partit->save();

        //$partit->update($request->all());

        if(isset($partit->golsEquipLocal, $partit->golsEquipVisitant)){
            echo $partit->resultat($partit);
        }

        return view('partits.show', compact('partit'));
    }

    public function destroy(Partit $partit){

        if ($partit->pPendent=='Pendent') {

           $partit->delete();

           return redirect()->route('partits.index');

        } else {

            $message = "(*) No es pot eliminar un partit jugat.";

            return back()->withErrors($message);
        }

    }


}
