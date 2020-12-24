@extends('welcome')
@section('title','Editar ventas')
@section('content')

<div class="content">
 <h1>Editar  venta </h1>
 @include('partials.validation-errors')

 <form method="POST" action="{{ route('ventas.update',$venta)}}">
    @CSRF @method('PATCH')
   <label for="">Cliente</label>
   <input type="text" name="cliente" value="{{old('cliente', $venta->cliente)}}">
   <button class="btn-add"> Actualizar</button>
 </form>
</div>

@endsection