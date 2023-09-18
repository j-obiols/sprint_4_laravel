@extends('layouts.plantilla')

@section('title', 'BatxBol BCN')

@section('content')
  
    <div class="container mt-5">

        <img src="{{ asset('images/futbol-concepto-exito-meta.JPG') }}" alt="foto-pilota-a-porteria">
        {{-- <p class="text-sm text-gray-400">
            <a href="https://www.freepik.es/foto-gratis/futbol-concepto-exito-meta_3398413.htm#query=futbol&position=2&from_view=search&track=sph">&copy jcomp</a> / Freepik
        </p> --}}
    
    </div>

    <div class="w-35% rounded pl-5 pt-20 bg-opacity-5 text-sobre-imatge">
        <p class="text-slate-500 text-xl sm:text-3xl lg:text-5xl lg:leading-relaxed">Arrenca la lliga <span class="text-orange-500">23/24!</span>
        </p>
        <br>
    
    </div>

@endsection