
@extends('layouts.plantilla')

@section('title', 'Equips')

@section('content')

  <div class="container w-5/6 md:w-3/4 mt-5">
    <table class="w-full text-xs md:text-lg text-left text-orange-500 font-semibold tracking-wide">
      <tbody>
        <tr class="border-b border-slate-200">
          <td class="py-5 w-1/5 pl-8"> 
              <a href="{{route('equips.create')}}">
                <span class="shadow-md inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-base font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">+ Afegir nou equip</span>
              </a>
            </td>  
        </tr>
    </table>
  </div>
  <div class="container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-0">
    @foreach ($equips as $equip)
      <div class="max-w rounded overflow-hidden shadow-lg mx-4 my-4">
        <img class="w-full" src="{{URL::asset('images/'.$equip->imatge)}}" alt="Foto equip">
        <div class="px-6 py-4">
          <div class="font-bold text-orange-500 text-xl tracking-wide mb-2"> 
            {{$equip->nom}}
          </div>
          <p class="text-slate-400 text-sm tracking-wide ">
            Entrenador: {{$equip->entrenador}} <br>
            Capità: {{$equip->capita}}
          </p>
        </div>
        <div class="px-6 pt-2 pb-5 text-slate-400 hover:text-orange-500">
          <a href="{{route('equips.show', $equip)}}">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-8 h-8 ">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75l-2.489-2.489m0 0a3.375 3.375 0 10-4.773-4.773 3.375 3.375 0 004.774 4.774zM21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            
          {{-- <span class="inline-block bg-slate-100 rounded-full px-3 py-1 text-sm sm:text-xs font-semibold text-slate-400 hover:text-orange-500 hover:bg-slate-50 mr-2 mb-3">Veure equip</span> --}}
          </a>
        </div>
      </div>
    @endforeach

    {{$equips->links()}}
  </div>

@endsection
        
        
   


