<header>
  <div class="container mt-3{{-- mb-1 --}}">
    <nav class="mx-auto mt-1 flex items-end justify-between flex-wrap bg-slate-100 p-10">
        <div class="flex flex-shrink-0 text-white mr-6 items-start">
          {{-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg> --}}
          {{-- <img  width="56" height="56" class="mr-5" src="{{ asset('images/soccer_ball_icon.gif') }}" alt="Equip de futbol"> --}}
          <div >  </div>
          <a href="{{route('inici')}}">
           <span class="text-2xl lg:text-4xl text-orange-500 tracking-tight tracking-wide">BatxBol BCN</span>
          </a>
        </div>
        <div class="block lg:hidden">
          <button id="boto" class="flex items-center px-3 py-2 border rounded text-slate-500 border-slate-500 hover:text-orange-500 hover:border-orange-500">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
        <div id="menu" class="w-full block flex-grow lg:flex lg:items-center lg:w-auto hidden">
          <div class="text-sm md:text-base text-center  lg:flex-grow">
            <a href="{{route('inici')}}" class="block mt-4 lg:inline-block lg:mt-0 text-slate-500 hover:text-orange-500 tracking-wide mr-5 {{request()->routeIs('inici')? 'active' : ''}}">
              Inici
            </a>
            <a href="{{route('equips.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-slate-500 hover:text-orange-500 tracking-wide mr-5 {{request()->routeIs('equips.index')? 'active' : ''}}">
              Equips
            </a>
            <a href="{{route('partits.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-slate-500 hover:text-orange-500 tracking-wide mr-5 {{request()->routeIs('partits.index')? 'active' : ''}}">
              Partits
          </a>
          <a href="{{route('partits.resultats')}}" class="block mt-4 lg:inline-block lg:mt-0 text-slate-500 hover:text-orange-500 tracking-wide mr-5 {{request()->routeIs('partits.resultats')? 'active' : ''}}">
            Resultats
          </a>
            
          <a href="{{route('equips.classificacio')}}" class="block mt-4 lg:inline-block lg:mt-0 text-slate-500 hover:text-orange-500 tracking-wide mr-5 {{request()->routeIs('equips.classificacio')? 'active' : ''}}">
              Classificació
          </a>
            
        </div>
          {{-- <div>
            <a href="#" class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-teal-500 hover:bg-white mt-4 lg:mt-0">Download</a>
          </div> --}}
        </div>
    </nav>
  </div>
    {{-- <div class="flex"> 
        <div class="container w-3/4 my-10">
            <div>
                <br>
                <h1>TX BCN</h1>
                <h4>LA LLIGA DE BATXILLERAT DE BARCELONA</h4>
                <br>
            </div>
            
            <div class="block lg:hidden">
                <button id="boto" class="flex items-center px-3 py-2 border rounded text-neutral-400 border-neutral-400 hover:text-orange-500 hover:border-orange-500">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>
        </div>   
    </div>
    <div id="menu" class="container w-3/4 hidden">
        <nav>
            <ul class = "flex  border-b">
            <li class="-mb-px mr-1"><a href="{{route('inici')}}" class="block bg-white lg:inline-block py-2 px-4 text-neutral-400 hover:text-orange-500 font-semibold {{request()->routeIs('inici')? 'active' : ''}} ">Inici</a>
            </li> 
            <li class="-mb-px mr-1"><a class="block bg-white lg:inline-block py-2 px-4 text-neutral-400 hover:text-orange-500 font-semibold {{request()->routeIs('partits.index')? 'active' : ''}}" href="{{route('partits.index')}}">Partits</a>
            </li>
            <li class="-mb-px mr-1"><a class="block bg-white lg:inline-block py-2 px-4 text-neutral-400 hover:text-orange-500 font-semibold {{request()->routeIs('equips.index')? 'active' : ''}}" href="{{route('equips.index')}}">Equips</a>
            </li>
            <li class="-mb-px mr-1"><a class="block bg-white lg:inline-block py-2 px-4 text-neutral-400 hover:text-orange-500 font-semibold {{request()->routeIs('equips.classificacio')? 'active' : ''}}" href="{{route('equips.classificacio')}}">Classificació</a>
            </li>
            <li class="-mb-px mr-1"><a class="block bg-white lg:inline-block py-2 px-4 text-neutral-400 hover:text-orange-500 font-semibold {{request()->routeIs('partits.calendari')? 'active' : ''}}" href="{{route('partits.calendari')}}">Calendari</a>
            </li>
            </ul>
        </nav>
        <br>
    </div> --}}
   
</header>