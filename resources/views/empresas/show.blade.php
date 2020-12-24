@extends('welcome')
@section('title', 'Empresa |'. $empresa->nombre)

@section('content')

<h1>{{$empresa->nombre}}</h1>
<a href="{{ route('empresas.edit',$empresa)}}">Editar</a>
<form method="POST" action="{{ route ('empresas.destroy',$empresa )}}">
@CSRF @method('DELETE')
<button>Eliminar </button>
</form>
<h1>{{$empresa->id}}</h1>

@endsection