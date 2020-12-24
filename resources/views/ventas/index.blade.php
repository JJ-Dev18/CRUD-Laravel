@extends('welcome') 
@section('title','Ventas')
@section('content')

  <div class="content">
   <h1 class="title-empresas">Ventas</h1>
    <ol class="list">
     @forelse($ventas as $venta)
     <li class="item-list"><a href="{{route('ventas.show',$venta)}}">{{$venta['cliente'].$venta['empresa_id']}}</a></li>
     
     @empty
     <li class="item-list">No hay ventas para mostrar</li>
     @endforelse
    </ol>
     <input type ='button' class="btn-add"  value ='Agregar Venta' onclick="location.href = '{{ route('ventas.create') }}'"/>
  </div>

@endsection
