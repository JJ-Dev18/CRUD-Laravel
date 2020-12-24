<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
   <header class="header">
       <ul class="nav-list">
       <li class="nav-item">
          <a href="{{route('empresas.index')}}">Empresas</a>
       </li>
       <li class="nav-item">
       <a href="{{route('empresas.create')}}">Ventas</a>
       </li>
       </ul>
   </header>
   <div id="info">
     @yield('content')
   </div>
</body>
</html>