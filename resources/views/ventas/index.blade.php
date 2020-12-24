@extends('welcome') 
@section('title','Ventas')
@section('content')

  <div class="content-empresas">
   <h1 class="title-empresas">Ventas</h1>
    <ul>
     @forelse($ventas as $venta)
     <li><a href="{{route('ventas.show',$venta)}}">{{$venta['cliente'].$venta['empresa_id']}}</a></li>
     
     @empty
     <li>No hay ventas para mostrar</li>
     @endforelse
    </ul>
     <input type ='button' class="btn btn-warning"  value ='Agregar Venta' onclick="location.href = '{{ route('ventas.create') }}'"/>
  </div>

@endsection
