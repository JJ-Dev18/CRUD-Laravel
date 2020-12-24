@extends('welcome') 
@section('title','Empresas')
@section('content')

  <div class="content-empresas">
   <h1 class="title-empresas">Empresas</h1>
    <ul>
     @forelse($empresas as $empresa)
     <li><a href="{{route('empresas.show',$empresa)}}">{{$empresa['nombre']}}</a></li>
     @empty
     <li>No hay Empresas para mostrar</li>
     @endforelse
    </ul>
     <input type ='button' class="btn btn-warning"  value ='Agregar Empresa' onclick="location.href = '{{ route('empresas.create') }}'"/>
  </div>

@endsection
