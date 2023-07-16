@extends('layouts.plantilla')

@section('title', 'Editar equip')
    
@section('content')
   
  <div class="mx-auto mt-5 w-11/12 md:w-3/4 flex flex-col justify-center items-center bg-slate-100"> 
    <div class="w-full max-w-md lg:max-w-lg mt-6 ">
      <form  action="{{route('partits.update', $partit)}}" method="post" class="bg-white shadow-xl rounded px-8 pt-6 pb-8 mx-5 mb-8">
          <!--Directiva que agrega un input ocult token -->
          @csrf
          <!--Directiva per indicar que volem utilitzar el mètode put -->
          @method('put')
          <p class="text-center text-orange-500 text-3xl py-5">Editar partit</p>
          <br>

            <div class="mb-3">
                <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="username">
                    Data del partit:
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="date" id="start" name="dataPartit" value="2022-10-01"
                min="2022-10-01" max="2023-05-30" value="{{old('dataPartit', $partit->dataPartit)}}">
                
                <p class="text-orange-500 text-xs italic pb-3">
                    @error('dataPartit')
                        <br>
                        *{{$message}}
                        <br>
                    @enderror
                </p>
            </div>

            

            <div class="mb-6">
                <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="password">
                    Hora del partit:
                </label>

                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="time" id="horaPartit" name="horaPartit" min="09:00" max="20:00" 
                value="{{old('horaPartit', $partit->horaPartit)}}">
                
                <p class="text-orange-500 text-xs italic">
                    @error('horaPartit')
                        <br>
                        *{{$message}}
                        <br>
                    @enderror
                </p>
            </div>

            <div class="mb-6">
                <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="password">
                    Camp:
                </label>
                <input type="text" name="camp" value="{{old('camp')}}" id="camp" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                
                <p class="text-orange-500 text-xs italic pb-3">
                    @error('camp')
                        <br>
                        *{{$message}}
                        <br>
                    @enderror
                </p>
            </div>

          <div class="mb-6">
            <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="capita">
                Nom de l'equip Local*:
            </label>
            <input type="text" name="equipLocal" value="{{old('equipLocal')}}" id="equipLocal" placeholder="{{$partit->equipLocal}}" readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
            <p class="text-slate-500 text-xs italic pb-3">
               (*) L'equip Local no es pot canviar.
            </p>
          </div>

            <div class="mb-6">
                <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="capita">
                    Nom de l'equip Visitant*:
                </label>
                <input type="text" name="equipLocal" value="{{old('equipLocal')}}" id="equipLocal" placeholder="{{$partit->equipVisitant}}" readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                <p class="text-slate-500 text-xs italic pb-3">
                (*) L'equip Visitant no es pot canviar.
                </p>
            </div>

            <div class="mb-6">
                <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="capita">
                    Gols equip Local:
                </label>
                <input type="text" name="golsEquipLocal" value="{{old('golsEquipLocal')}}" id="golsEquipLocal" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                
                <p class="text-orange-500 text-xs italic pb-3">
                    @error('golsEquipLocal')
                        <br>
                        *{{$message}}
                        <br>
                    @enderror 
                </p>

            </div>

            <div class="mb-6">
                <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="capita">
                    Gols equip Visitant:
                </label>
                <input type="text" name="golsEquipVisitant" value="{{old('golsEquipVisitant')}}" id="golsEquipVisitant" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                
                <p class="text-orange-500 text-xs italic pb-3">
                    @error('golsEquipVisitant')
                        <br>
                        *{{$message}}
                        <br>
                    @enderror
                </p>

            </div>

            <div class="mb-6">
                <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="capita">
                    Resum del partit:
                </label>
                <input type="text" name="resumPartit" value="{{old('resumPartit')}}" id="resumPartit" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
                
                {{-- <p class="text-orange-500 text-xs italic pb-3">
                    @error('resumPartit')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                    @enderror 
                </p> --}}

            </div>

          <div class="flex items-center justify-between">
            <button type="submit" class="shadow-md bg-slate-100 text-slate-500 hover:text-orange-500 hover:bg-slate-50  text-xs md:text-base  py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Actualitzar dades partit
            </button>
          </div>

      </form>
    </div>
  </div>

@endsection
