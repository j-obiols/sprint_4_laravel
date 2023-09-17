@extends('layouts.plantilla')

@section('title', 'Resultats')

@section('content')

    <div class="container w-5/6 mt-5 md:w-3/4">
        <table class="w-full text-center text-orange-500 text-sm md:text-lg ">
            <tbody>
                <thead>
                    <tr class="bg-slate-100 border-b text-slate-500 border-slate-200">
                        <td class="py-5  pl-10  tracking-wide"> Local</td>
                        <td class="py-5"> </td>
                        <td class="py-5"> </td>
                        <td class="py-5"> </td>
                        <td class="py-5"> Visitant</td>
                        <td class="py-5 text-left pl-5 md:pl-20 pr-5 tracking-wide"> </td>
                    </tr>
                </thead>
                @foreach ($partits as $partit)
                    <tr class="border-b border-slate-200 text-orange-500 transition duration-300 ease-in-out hover:bg-slate-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                        <td class="py-5  w-1/5 pl-10 tracking-wide"> {{$partit->obtenirEquipLocal->nom}}</td>
                        <td class="py-5 w-1/5 tracking-wide"> {{$partit->golsEquipLocal}} </td>
                        <td class="py-5 w-1/10 tracking-wide">-</td>
                        <td class="py-5 w-1/5 tracking-wide" >{{$partit->golsEquipVisitant}}</td>
                        <td class="py-5 w-1/5 tracking-wide">{{$partit->obtenirEquipVisitant->nom}}</td>
                        <td class="py-5 w-1/10 pl-5 md:pl-20 pr-5 text-right tracking-wide">
                            <a href="{{route('partits.show', $partit)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                  </svg>
                                  
                                {{-- <span class="inline-block bg-slate-100 hover:text-orange-500 hover:bg-slate-50 text-slate-500 text-sm font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">+ info</span> --}}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="border-b border-slate-200 pl-10 py-5">
         {{$partits->links()}}
        </div>
    </div>

@endsection

