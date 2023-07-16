@extends('layouts.plantilla')

@section('title', 'Equip '.$equip -> nom)
@section('content')
  <div class="container">
         <div class="flex w-5/6 md:w-3/4 mt-5 py-5 pl-8 mt-1">
            <div>
               <a href="{{route('equips.edit', $equip)}}">
                  <span class="shadow-md inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-sm  py-2 px-4 rounded focus:outline-none focus:shadow-outline">Editar Equip</span>
               </a>
            </div>
            <div class="ml-6">
               <form action="{{route('equips.destroy', $equip)}}" method="post"> 
                  @csrf
                  @method('delete')
                  <button type="submit" class="shadow-md inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-sm py-2 px-4 rounded focus:outline-none focus:shadow-outline">Eliminar Equip (*)</button>
               </form>      
            </div>  
            <div class="ml-6">
               <a href={{route('equips.index')}}>
                  <span class="shadow-md inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-sm py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                     Tornar a Equips
                  </span>
               </a>
            </div>  
         </div>
      </div>
      <div class="container justify-center py-0 ">
         <div class="flex flex-col  md:flex-row">
            <div class="w-full md:w-1/2 ml-0">
               <img src="{{URL::asset('images/'.$equip->imatge)}}" alt="equip de futbol">
            </div>
         
            <div class="w-full md:w-1/2 bg-slate-100">
               <div class="px-6 py-4 font-bold text-orange-500 text-xl tracking-wide mb-2"> 
                  {{$equip->nom}}
               </div>
               <div class="px-6 pb-5 ">
                  <p class="text-slate-500 text-sm tracking-wide leading-5 lg:leading-7 ">
                     Entrenador: {{$equip->entrenador}} <br>
                     Capità: {{$equip->capita}}<br>
                     <div class="flex flex-col mt-2 mb-5 lg:mt-5">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="text-slate-400 min-w-full text-left text-sm font-light">
                                <thead
                                  class="border-b  bg-white font-medium dark:border-neutral-500 dark:bg-neutral-600">
                                  <tr class="bg-slate-100">
                                    <th scope="col" class="w-1/7 text-center px-1 py-4">P</th>
                                    <th scope="col" class="w-1/7 text-center px-1 py-4">PJ</th>
                                    <th scope="col" class="w-1/7 text-center px-1 py-4">PG</th>
                                    <th scope="col" class="w-1/7 text-center px-1 py-4">PE</th>
                                    <th scope="col" class="w-1/7 text-center px-1 py-4">PP</th>
                                    <th scope="col" class="w-1/7 text-center px-1 py-4">GF</th>
                                    <th scope="col" class="w-1/7 text-center px-1 py-4">GC</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr
                                    class="bg-white border-b font-medium dark:border-neutral-500 dark:bg-neutral-700">
                                    <td class="text-orange-500 whitespace-nowrap w-1/7 text-center px-1 py-4"> {{$equip->punts}}</td>
                                    <td class="whitespace-nowrap w-1/7 text-center px-1 py-4">{{$equip->pJugats}} </td>
                                    <td class="whitespace-nowrap w-1/7 text-center px-1 py-4">{{$equip->pGuanyats}}</td>
                                    <td class="whitespace-nowrap w-1/7 text-center px-1 py-4">{{$equip->pEmpatats}}</td>
                                    <td class="whitespace-nowrap w-1/7 text-center px-1 py-4">{{$equip->pPerduts}}</td>
                                    <td class="whitespace-nowrap w-1/7 text-center px-1 py-4">{{$equip->gFavor}}</td>
                                    <td class="whitespace-nowrap w-1/7 text-center px-1 py-4"> {{$equip->gFavor}}</td>
                                  </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div class="text-xs md:text-sm text-orange-500 py-6">
                        @if($errors->any())
                          {{ implode('', $errors->all(':message')) }}
                        @endif
                     </div>
                  </div>
               </div>
            </div>
         </div>    
      </div> 
   </div>     
@endsection