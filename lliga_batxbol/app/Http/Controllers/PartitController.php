<?php

namespace App\Http\Controllers;

use App\Models\Partit;
use App\Models\Equip;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/*Indiquem que utilitzi les normes de validació descrites en els arxius Request:*/
use App\Http\Requests\StorePartit;
use App\Http\Requests\UpdatePartit;


class PartitController extends Controller {


    public function index(){

        $partits = Partit::orderBy('dataPartit', 'desc')->paginate();

        return view('partits.index', compact('partits'));
    }


    public function resultats(){

        $partits = Partit::orderBy('dataPartit', 'desc')->paginate();

        return view('partits.resultats', compact('partits'));
    }


    public function create(){

        $equips = Equip::all();

        return view('partits.create', compact('equips'));
    }


    public function store(StorePartit $request){

        $partit = Partit::create([

            'dataPartit' => $request->dataPartit,
            'horaPartit' => $request->horaPartit,
            'camp' => $request->camp,
            'equip_local_id' => Equip::where('nom', $request -> equip_local_id)->first()->id,
            'equip_visitant_id' => Equip::where('nom', $request -> equip_visitant_id)->first()->id
            
        ]);

      
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

        if(isset($partit->golsEquipLocal, $partit->golsEquipVisitant)){
            echo $partit->gestionarResultat($partit);
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
