@extends('welcome')
@section('title','Agregar Empresas')
@section('content')

<div class="form">
 <h1>Editar  empresa </h1>
 @include('partials.validation-errors')

 <form method="POST" action="{{ route('empresas.update',$empresa)}}">
    @CSRF @method('PATCH')
   <label for="">Nombre de la empresa</label>
   <input type="text" name="nombre" value="{{old('nombre', $empresa->nombre)}}">
   <button class="btn-subtmit"> Actualizar</button>
 </form>
</div>

@endsection