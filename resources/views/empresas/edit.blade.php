@extends('welcome')
@section('title','Editar Empresas')
@section('content')

<div class="content">
 <h1>Editar  empresa </h1>
 @include('partials.validation-errors')

 <form method="POST" action="{{ route('empresas.update',$empresa)}}">
    @CSRF @method('PATCH')
   <label for="">Nombre de la empresa</label>
   <input type="text" name="nombre" value="{{old('nombre', $empresa->nombre)}}">
   <button class="btn-add"> Actualizar</button>
 </form>
</div>

@endsection