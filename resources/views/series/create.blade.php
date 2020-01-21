@extends('layout')

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
<form method="post">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <button class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection