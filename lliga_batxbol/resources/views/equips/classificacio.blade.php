@extends('layouts.plantilla')

@section('title', 'Classificacio')

@section('content')
    <div class="container mt-5 w-5/6 md:w-3/4">
        <table class="w-full text-xs sm:text-sm md:text-base text-center text-orange-500  tracking-wide">
            <thead>
                
                <tr class="bg-slate-100 border-b text-slate-500  border-slate-200 ">
                    <td class="py-7 w-1/5 text-left pl-5 md:pl-12"> Equip</td>
                    <td class="py-7 w-4/35 text-center font-semibold text-orange-500"> Punts </td>
                    <td class="py-7 w-4/35 text-center" >PJ</th>
                    <td class="py-7 w-4/35 text-center">PG</td>
                    <td class="py-7 w-4/35 text-center">PE</td>
                    <td class="py-7 w-4/35 text-center">PP</td>
                    <td class="py-7 w-4/35 text-center">GF</td>
                    <td class="py-7 w-4/35 text-center">GC</td>
                </tr>
              
            </thead>
            <tbody>
                @foreach ($equips as $equip)
                        <tr class=" border-b border-slate-200  text-orange-500 transition duration-300 ease-in-out hover:bg-slate-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="py-5 w-1/5 text-left pl-5 md:pl-12 font-semibold"> {{$equip->nom}}</td>
                            <td class="py-5 w-4/35 text-center font-semibold text-orange-500"> {{$equip->punts}} </td>
                            <td class="py-5 w-4/35 text-slate-500 text-center">{{$equip->pJugats}}</td>
                            <td class="py-5 w-4/35 text-slate-500 text-center">{{$equip->pGuanyats}}</td>
                            <td class="py-5 w-4/35 text-slate-500 text-center">{{$equip->pEmpatats}}</td>
                            <td class="py-5 w-4/35 text-slate-500 text-center">{{$equip->pPerduts}}</td>
                            <td class="py-5 w-4/35 text-slate-500 text-center">{{$equip->gFavor}}</td>
                            <td class="py-5 w-4/35 text-slate-500 text-center">{{$equip->gContra}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
        
        {{$equips->links()}}
        
    </div>
   
@endsection
        
        
   


