@extends('welcome') 
@section('title','Empresas')
@section('content')

  <div class="content">
   <h1 class="title-empresas">Empresas</h1>
    <ol class="list">
     @forelse($empresas as $empresa)
     <li class="item-list"><a href="{{route('empresas.show',$empresa)}}">{{$empresa['nombre']}}</a></li>
     @empty
     <li class="item-list">No hay Empresas para mostrar</li>
     @endforelse
    </ol>
     <input type ='button' class="btn-add"  value ='Agregar Empresa' onclick="location.href = '{{ route('empresas.create') }}'"/>
  </div>

@endsection
