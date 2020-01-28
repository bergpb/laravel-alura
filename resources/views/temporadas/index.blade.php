@extends('layout')

@section('cabecalho')
    Temporadas
@endsection

@section('conteudo')
   <ul class="list-group">
        @foreach($temporadas as $temporada)
        <li class="list-group-item">{{ $temporada->numero }}</li>
        @endforeach
   </ul>
@endsection


