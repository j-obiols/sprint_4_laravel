@extends('layouts.plantilla')

@section('title', 'Crear Partit')
    
@section('content')
   
    <div class="mx-auto mt-5 w-11/12 md:w-3/4  flex flex-col justify-center items-center bg-slate-100"> 
        <div class="w-full max-w-md lg:max-w-lg mt-6 ">
            <form  action="{{route('partits.store')}}" method="post" class="bg-white shadow-xl rounded-lg px-8 pt-8 mt-10 mb-10 pb-8 mx-5 mb-8">
                <!--Directiva que agrega un input ocult token -->
                @csrf

                <p class="text-left text-orange-500 text-3xl py-5">Nou partit</p>
                <br>

                <div class="mb-4">
                    <label class="block text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="dataPartit">
                        Data del partit:
                    </label>
                    <input type="date" id="dataPartit" name="dataPartit" value="2022-09-01"
                    min="2022-09-01" max="2023-05-30" value="{{old('dataPartit')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-500 leading-tight focus:outline-none focus:shadow-outline" >
                </div>

                <p class="text-orange-500 text-xs italic">
                    @error('dataPartit')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror
                </p>

                <div class="mb-6">

                    <label class="block text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="horaPartit">
                        Hora del partit:
                    </label>

                    <input type="time" id="horaPartit" name="horaPartit" min="09:00" max="20:00" 
                    value="{{old('horaPartit')}}"  class="shadow appearance-none border rounded w-full py-2 px-3 text-slate-500 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                    <p class="text-orange-500 text-xs italic">
                        @error('horaPartit')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                        @enderror
                    </p>
                </div>

                <div class="mb-6">
                    <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="equipLocal">
                        Nom de l'equip Local:
                    </label>
                    <div class="inline-block relative w-full">
                        <select name="equipLocal" class="block appearance-none w-full bg-white px-4 py-2 pr-8 rounded shadow leading-tight text-slate-500 focus:outline-none focus:shadow-outline">
                            @foreach($equips as $equip) {
                                <option value="{{$equip->nom}}" > 
                                    {{$equip->nom}}
                                </option>
                            }
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <p class="text-orange-500 text-xs italic">
                        @error('equipLocal')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror
                    </p>
                </div>

                <div class="mb-6">

                    <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="equipVisitant">
                        Nom de l'equip Visitant:
                    </label>

                    <div class="inline-block relative w-full">
                        <select name="equipVisitant" class="block appearance-none w-full bg-white px-4 py-2 pr-8 rounded shadow leading-tight text-slate-500 focus:outline-none focus:shadow-outline">
                            @foreach($equips as $equip) {
                                <option value="{{$equip->nom}}" default=""> 
                                    {{$equip->nom}}
                                </option>
                            }
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>

                    <p class="text-orange-500 text-xs italic">
                        @error('equipVisitant')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror

                        @error('equipVisitant.different')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                        @enderror

                    </p>

                </div>

                <div class="mb-6">

                    <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="camp">
                        Camp:
                    </label>

                    <input type="text" name="camp" value="{{old('camp')}}" id="camp" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                   
                    <p class="text-orange-500 text-xs italic">
                        @error('camp')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                        @enderror
                    </p>

                </div>
                
                <div class="flex items-center justify-between">
                    <button type="submit" class="shadow-md bg-slate-100 text-slate-500 hover:text-orange-500 hover:bg-slate-50  text-xs md:text-base  py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">
                       Crear nou partit
                    </button>
                </div>

            </form>
        </div>
    </div>
@endsection
