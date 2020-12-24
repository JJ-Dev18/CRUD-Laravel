@extends('welcome')
@section('title', 'Venta |'. $venta->cliente)

@section('content')

<h1>{{$venta->id}}</h1>
<h1>{{$venta->cliente}}</h1>
<a href="{{ route('ventas.edit',$venta)}}">Editar</a>
<form method="POST" action="{{ route ('ventas.destroy',$venta )}}">
@CSRF @method('DELETE')
<button>Eliminar </button>
</form>


@endsection