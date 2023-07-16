@extends('layouts.plantilla')

@section('title', 'BatxBol BCN')

@section('content')
  
    <div class="container mt-5">

        <img src="{{ asset('images/futbol-concepto-exito-meta.JPG') }}" alt="foto-pilota-a-porteria">
        {{-- <p class="text-sm text-gray-400">
            <a href="https://www.freepik.es/foto-gratis/futbol-concepto-exito-meta_3398413.htm#query=futbol&position=2&from_view=search&track=sph">&copy jcomp</a> / Freepik
        </p> --}}
    
    </div>

    <div class="w-30%  rounded pl-5 pt-5 bg-opacity-5 text-sobre-imatge">
        <p class="text-slate-500 text-base sm:text-2xl lg:text-3xl leading-normal">El Milà, campió de la lliga <span class="text-orange-500">
            BatxBol BCN </span>22/23!</p>
        <br>
    
    </div>

@endsection