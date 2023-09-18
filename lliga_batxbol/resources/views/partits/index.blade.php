@extends('layouts.plantilla')

@section('title', 'Partits')

@section('content')
    <div class="container w-11/12 md:w-3/4 mt-5">
        <table class="w-full text-xs sm:text-sm md:text-base text-left text-orange-500 font-semibold tracking-wide">
            <tr class="border-b border-slate-200 ">
                <td class="py-5 w-1/5 pl-8"> 
                    <a href="{{route('partits.create')}}">
                        <span class="shadow-md inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-base font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">+ Afegir nou partit</span>
                    </a>
                </td>  
            </tr>
        </table>
    </div>
    <div class="container {{-- w-5/6 md:w-3/4 mt-1 --}}">
        <table class="w-full text-xs lg:text-sm text-center text-orange-500 tracking-wide">
        
            <thead>
                
                <tr class="bg-slate-100 border-b text-slate-500  border-slate-200 ">
                    <th class="py-5 text-left pl-2 md:pl-10 pr-1 md:pr-6  tracking-wide"> Data</th>
                    <th class="py-5 px-5 text-left pr-1 md:pr-6 tracking-wide"> Hora </th>
                    <th class="py-5  pl-6 pr-1 text-left tracking-wide"> </th>
                    <th class="py-5 w-min-1/4 text-left pr-1 md:pr-6 tracking-wide" >Partit</th>
                    <th class="py-5  text-left pr-1 md:pr-6 tracking-wide">Camp</th>
                    <th class="py-5  text-left pl-5  pr-2 md:pr-10 tracking-wide">Estat</th>
                    {{-- <th class="py-5 w-1/6 text-center"></th> --}}
                </tr>
            
            </thead>
            <tbody>
                @foreach ($partits as $partit)
                        <tr class="border-b border-slate-200  text-slate-400 transition duration-300 ease-in-out hover:bg-slate-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="py-5 text-left pl-2 md:pl-10 pr-1 md:pr-6  tracking-wide"> {{$partit->data($partit)}}</td>
                            <td class="py-5 px-5  text-left pr-1 md:pr-6 tracking-wide"> {{$partit->hora($partit)}} </td>
                            <td class="py-5 pl-6 pr-1  text-right text-orange-500"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                               </svg> </td>
                            <td class="py-5 text-left pr-1 md:pr-6 text-orange-500 tracking-wide font-medium pr-5">
                                <a href="{{route('partits.show', $partit)}}">
                                {{$partit->obtenirEquipLocal->nom."  -  ".$partit->obtenirEquipVisitant->nom}}  
                                </a>
                            </td>
                            <td class="py-5  text-left tracking-wide pr-1 md:pr-6">{{$partit->camp}}</td>
                            <td class="py-5  text-left pl-5 pr-2 md:pr-10 tracking-wide"> 
                                {{$partit->pPendent}}
                            </td> 
                               
                            {{-- <td class="py-5 w-1/6 pr-1 text-center">
                                <a href="{{route('partits.show', $partit)}}">
                                    <span class="inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-sm font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Veure partit</span>
                                </a>
                            </td> --}}
                        </tr>
                @endforeach
            </tbody>
        </table>
        <div class="border-b border-slate-200 pl-5 py-5">
          {{$partits->links()}}
        </div>
    </div>
   
@endsection


