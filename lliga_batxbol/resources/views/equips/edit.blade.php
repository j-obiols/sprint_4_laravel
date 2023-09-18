@extends('layouts.plantilla')

@section('title', 'Editar equip')
    
@section('content')
   
  <div class="mx-auto mt-5 w-11/12 md:w-3/4 flex flex-col justify-center items-center bg-slate-100"> 
    <div class="w-full max-w-md lg:max-w-lg mt-6 ">
      <form  action="{{route('equips.update', $equip)}}" method="post" class="bg-white shadow-xl rounded px-8 mt-10 mb-10 pt-8 pb-10 mx-5 mb-8">
         
        <!--Directiva que agrega un input ocult token -->
        @csrf
        <!--Directiva per indicar que volem utilitzar el mètode put -->
        @method('put')

        <p class="text-center text-orange-500 text-3xl py-5">Editar equip</p><br>
        
    
        <div class="mb-3">

          <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="username">
            Nom de l'equip(*):
          </label>

          <input type="text" name="nom" value="{{$equip->nom}}" id="nom" readonly class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
          
          <p class="text-slate-500 text-xs italic pb-5 pt-5">
            *El nom de l'equip no es pot canviar fins que la lliga en curs no finalitzi. 
          </p> 

        </div>
          
          

        <div class="pt-6 mb-6">

          <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="password">
              Nom i Cognom Entrenador:
          </label>

          <input type="text" name="entrenador" value="{{$equip->entrenador}}" id="entrenador"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
          
          <p class="text-orange-500 text-xs italic">

            @error('entrenador')
              <br>
              <small>*{{$message}}</small>
              <br>
            @enderror
          
          </p>

        </div>

        <div class="mt-6 mb-6">

          <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="password">
              Email Entrenador:
          </label>

          <input type="text" name="email" value="{{$equip->email}}" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
          
          <p class="text-orange-500 text-xs italic">

            @error('email')
              <br>
              *{{$message}}
              <br>
            @enderror

          </p>

        </div>

        <div class="mt-6 mb-6">

          <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="capita">
              Nom i Cognom Capità:
          </label>

          <input type="text" name="capita" id="capita" value="{{$equip->capita}} " class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
          
          <p class="text-orange-500 text-xs italic">

            @error('capita')
              <br>
              *{{$message}}
              <br>
            @enderror

          </p>

        </div>

        <div class="flex items-center justify-between">

          <button type="submit" class="shadow-md bg-slate-100 text-slate-500 hover:text-orange-500 hover:bg-slate-50  text-xs md:text-base  py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Enviar formulari
          </button>

        </div>

      </form>
    </div>
  </div>

@endsection

