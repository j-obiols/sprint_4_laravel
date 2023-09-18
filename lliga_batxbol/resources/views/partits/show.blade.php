@extends('layouts.plantilla')

@section('title', 'partit '.$partit->id)
@section('content')

   <div class="container">

      <div class="flex py-3 pl-8 mt-5">

         <div>

            <a href="{{route('partits.edit', $partit)}}">
               <span class="shadow-md inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-sm  py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                  Editar Partit
               </span>
            </a>

         </div>

         <div class="ml-6">

            <form action="{{route('partits.destroy', $partit)}}" method="post">
               @csrf
               @method('delete')
               <button type="submit" class="shadow-md inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-sm py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar Partit (*)</button>
            </form> 

         </div> 

      </div>
   </div>
   

  <div class="container justify-center py-0 ">

      <div class="flex flex-col md:flex-row">

         <div class="w-full md:w-1/2 ml-0">
            <img class="w-full align-center" src="{{asset('images/partit_1_freepik.JPG') }}" alt="Equip de futbol 1">
         </div>

         <div class="w-full md:w-1/2  bg-slate-100">

            <table class="w-full text-sm md:text-base lg:text-xl text-center text-orange-500 font-semibold tracking-wide">
               <tbody>
                  <tr class="px-5">
                     <td class="py-5 px-3"> {{$partit->obtenirEquipLocal->nom}}</td>
                     <td class="py-5 px-3"> {{$partit->golsEquipLocal}} </td>
                     <td class="py-5 px-3">-</td>
                     <td class="py-5 px-3" >{{$partit->golsEquipVisitant}}</td>
                     <td class="py-5 px-3"> {{$partit->obtenirEquipVisitant->nom}}</td>
                  </tr>       
               </tbody>
            </table>  

            <div class="px-6 py-3 ml-4">
               <p class="text-slate-400 text-sm md:text-base">
                  <span class="text-xs md:text-sm tracking-wide">Data:</span> {{$partit->data($partit)}} <br>
                  <span class="text-xs md:text-sm tracking-wide">Hora:</span> {{$partit->hora($partit)}} h<br>
                  <span class="text-xs md:text-sm tracking-wide">Camp: </span>{{$partit->camp}}<br>
                  <span class="text-xs md:text-sm tracking-wide">Estat:</span> {{$partit->pPendent}}<br>
                  <span class="text-xs md:text-sm tracking-wide">Resum del partit:</span><br>
               </p>
            </div>

            <div class="px-6 py-3 ml-4">
               <p class="text-slate-400 text-sm md:text-base leading-loose">
                  {{$partit->resumPartit}}
               </p>
            </div>
         
            <div class="text-xs md:text-sm text-orange-500 px-6 py-3">
               @if($errors->any())
                 {{ implode('', $errors->all(':message')) }}
               @endif
            </div>

         </div>
      </div>    
   </div> 
   
@endsection