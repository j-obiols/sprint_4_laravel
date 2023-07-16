<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--Incloem directiva tailwind -->
    @vite(['resources/css/app.css', 'resources/css/estilos.css'])
    <script type="text/javascript" src="{!! asset('js/app.js') !!}" async></script>

</head>
<body class="bg-slate-300">
  
  @include('layouts.partials.header')
  
  @yield('content')
   
  @include('layouts.partials.footer')
</body>
</html>