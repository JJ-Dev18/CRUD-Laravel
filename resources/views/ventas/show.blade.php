@extends('welcome')
@section('title', 'Venta |'. $venta->cliente)

@section('content')
<div class="content">
<ul class="list">
  <li class="item-list">Id : {{$venta->id}}</li>
  <li class="item-list">Cliente : {{$venta->cliente}}</li>
  <li class="item-list">Empresa : {{$venta->empresa->nombre}}</li>
</ul>

<div class="actions">
  <button class="btn-edit" onclick="location.href = '{{ route('ventas.edit',$venta)}}'">Editar</button>

<form method="POST" action="{{ route ('ventas.destroy',$venta )}}">
@CSRF @method('DELETE')
<button class="btn-delete">Eliminar </button>
</form>
</div>
</div>



@endsection