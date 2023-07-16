@extends('layouts.plantilla')

@section('title', 'Calendari')

@section('content')

    <div class="container w-5/6 md:w-3/4 mt-5">
        <table class="w-full text-xs sm:text-sm md:text-base text-left text-orange-500 font-semibold tracking-wide">
            <tr class="border-b border-slate-200 ">
                <td class="py-5 w-1/5 pl-8"> 
                    <a href="{{route('partits.create')}}">
                        <span class="inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-base font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">+ Crear nou partit</span>
                    </a>
                </td>  
            </tr>
        </table>
    </div>
    <div class="container w-5/6 md:w-3/4 mt-6">
        <table class="w-full text-xs  md:text-sm text-center text-orange-500 font-semibold tracking-wide">
           
            <thead>
                
                <tr class="border-b text-slate-500  border-slate-200 ">
                    <th class="py-5 w-1/6 text-left pl-10"> Data</th>
                    <th class="py-5 w-1/6 text-left"> Hora </th>
                    <th class="py-5 w-1/4 text-left" >Partit</th>
                    <th class="py-5 w-1/4 text-left">Camp</th>
                    <th class="py-5 w-1/6 text-left pr-5"></th>
                </tr>
              
            </thead>
            <tbody>
                @foreach ($partits as $partit)
                        <tr class="border-b border-slate-200  text-slate-400 transition duration-300 ease-in-out hover:bg-slate-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="py-5 w-1/6 text-left pl-10"> {{$partit->data($partit)}}</td>
                            <td class="py-5 w-1/6 text-left"> {{$partit->horaPartit}} </td>
                            <td class="py-5 w-1/4 text-left text-orange-500">{{$partit->equipLocal."-".$partit->equipVisitant}}</td>
                            <td class="py-5 w-1/4 text-left">{{$partit->camp}}</td>
                            <td class="py-5 w-1/6 text-left pr-5">
                                <a href="">
                                    <span class="inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-xs md:text-sm font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Veure partit</span>
                                </a></td>
                        </tr>
                @endforeach
            </tbody>
        </table>
        
        {{$partits->links()}}
        
    </div>
   
@endsection