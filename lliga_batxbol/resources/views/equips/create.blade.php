@extends('layouts.plantilla')

@section('title', 'Crear equip')
    
@section('content')

   <div class="mx-auto mt-5 w-11/12 md:w-3/4 mt-1 flex flex-col justify-center items-center bg-slate-100"> 
      <div class="w-full max-w-md lg:max-w-lg mt-6 ">

         <form  action="{{route('equips.store')}}" method="post" class="bg-white shadow-2xl rounded-md px-8 mt-10 mb-10 pt-8 pb-10 mx-5 mb-8">
            <!--Directiva que agrega un input ocult token -->
            @csrf
            
            <p class="text-left text-orange-500 text-3xl py-5">
               Nou equip
            </p>
            <br>

            <div class="mb-6">
               <label class="block text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="username">
                  Nom de l'equip:
               </label>
               <input type="text" name="nom" value="{{old('nom')}}" id="nom"  placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" >
               <p class="text-orange-500 text-xs italic mb-6">
                  @error('nom')
                     <br>
                     <small>*{{$message}}</small>
                     <br>
                  @enderror
               </p> 
            </div>
            

            <div class="mb-6">
               <label class="block text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="password">
                  Nom i Cognom Entrenador:
               </label>
               <input type="text" name="entrenador" value="{{old('entrenador')}}" id="entrenador"  placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
               <p class="text-orange-500 text-xs italic">
                  @error('entrenador')
                     <br>
                     <small>*{{$message}}</small>
                     <br>
                  @enderror
               </p>
            </div>

            <div class="mb-6">
               <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="password">
                  Email Entrenador:
               </label>
               <input type="text" name="email" value="{{old('email')}}" id="email" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
               <p class="text-orange-500 text-xs italic">
                  @error('email')
                     <br>
                     <small>*{{$message}}</small>
                     <br>
                  @enderror
               </p>
            </div>

            <div class="mb-6">
               <label class="block  text-slate-400 text-xs md:text-sm font-semibold tracking-wide mb-2" for="capita">
                  Nom i Cognom Capità:
               </label>
               <input type="text" name="capita" value="{{old('capita')}}" id="capita" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline">
               <p class="text-orange-500 text-xs italic">
                  @error('capita')
                     <br>
                     <small>*{{$message}}</small>
                     <br>
                  @enderror
               </p>
            </div>

            <div class="text-left">
               <button type="submit" class="shadow-md bg-slate-100 text-slate-500 hover:text-orange-500 hover:bg-slate-50  text-xs md:text-base  py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                  Registrar nou equip
               </button>
            </div>

         </form>
      </div>
   </div>

@endsection