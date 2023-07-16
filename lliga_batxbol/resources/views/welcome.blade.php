{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--Incloem directiva tailwind -->
    @vite(['resources/css/app.css', 'resources/css/estilos.css'])

</head>
<body>

    {{-- <div class="container">BATXGOL</div>
    <div class="container">PARTITS</div>
    <div class="container">EQUIPS</div> --}}

   {{--  <div class="container my-5 p-2">
      <div class="bg-orange-500 text-center py-10 ">
         <h1>TX</h1>
         La Lliga de Batxillerat
       </div>   
    </div>

    <div class="container my-10 p-2">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 ">
            <div class="bg-orange-500 text-center py-20">
                <a href="{{route('partits.index')}}">
                    <h2> partits</h2>
                </a> 
            </div>  
            <div class="bg-orange-500 text-center py-20">
                <a href="{{route('equips.index')}}">
                    <h2>equips</h2>
                </a>
            </div>  
            
        </div>
    </div> --}} 

   {{-- <div class=container>
        <div class="grid grid-cols-1 grid-rows-2 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="bg-blue-200 col-start-2 col-span-2">A</div>
            <div class="bg-blue-300 row-span-2">B</div>
            <div class="bg-blue-400 ">C</div>
            <div class="bg-blue-500">D</div>
        </div>
   </div>

   <div class="container">
        <div class="grid grid-flow-col grid-rows-3">
            <div class="bg-blue-100">1</div>
            <div class="bg-blue-200">2</div>
            <div class="bg-blue-300">3</div>
            <div class="bg-blue-400">4</div>
            <div class="bg-blue-500">5</div>
            <div class="bg-blue-600">6</div>
            <div class="bg-blue-700">7</div>
            <div class="bg-blue-800">8</div>
            <div class="bg-blue-900">9</div>
        </div>
    </div> --}}
    
    <br>
    <br>
    <div class="container">
        <table class= "table">
            <thead>
            <tr>
                <th>EQUIP</th>
                <th>PUNTS</th>
                <th>PG</th>
                <th>PP</th>
                <th>PE</th>
            </tr>
            </thead>
            
            <tbody>
                <tr>
                    <th>Jaume Balmes</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Milà i Fontanals</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Les Corts</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Sants</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Montserrat</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Sant Andreu</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Menéndez i Pelayo</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
                <tr>
                    <th>Salvador Espriu</th>
                    <th>24</th>
                    <th>3</th>
                    <th>2</th>
                    <th>2</th>
                </tr>
            </tbody>
        </table>
    </div> 

</body>
</html>