@extends('welcome')
@section('title', 'Empresa |'. $empresa->nombre)

@section('content')
<div class="content">
  <ul class="list">
    <li class="item-list">Id : {{$empresa->id}}</li>
    <li class="item-list">Nombre Empresa : {{$empresa->nombre}}</li>
   
  </ul>
  <div class="actions">
    
<button class="btn-edit" onclick="location.href = '{{ route('empresas.edit',$empresa)}}'">Editar</button>
<form method="POST" action="{{ route ('empresas.destroy',$empresa )}}">
@CSRF @method('DELETE')

<button class="btn-delete">Eliminar </button>
</form>
  </div>


</div>


@endsection