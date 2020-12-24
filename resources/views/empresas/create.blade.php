@extends('welcome')
@section('title','Agregar Empresas')
@section('content')

<div class="content">
 <h1> Agregar nueva empresa </h1>
 @include('partials.validation-errors')

 <form method="POST" action="{{ route('empresas.store')}}">
    @CSRF
   <label for="">Nombre de la empresa</label>
   <input type="text" name="nombre">
   <button class="btn-add"> Agregar</button>
 </form>
</div>

@endsection