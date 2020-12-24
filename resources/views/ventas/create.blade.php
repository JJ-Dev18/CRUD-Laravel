@extends('welcome')
@section('title','Agregar Empresas')
@section('content')

<div class="form">
 <h1> Agregar nueva venta </h1>
 @include('partials.validation-errors')

 <form method="POST" action="{{ route('ventas.store')}}">
    @CSRF
   <label for="">Nombre del cliente</label>
   <input type="text" name="cliente">
   <label>Id de la empresa</label>
   <input type="num" name="empresa_id">
   <button class="btn-subtmit"> Agregar</button>
 </form>
</div>

@endsection