@extends('home_app')
@section('conteudo')
<h3>Cadastro Produto</h3>
<form action="/produtos/adiciona" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" aria-describedby="emailHelp" required> 
    </div>
    <div class="mb-3">
        <label for="valor" class="form-label">Valor</label>
        <input name="valor" type="number" class="form-control" id="valor" required>
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input name="quantidade" type="number" class="form-control" id="quantidade" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
</form>
<div class="alert alert-success" role="alert">
    <strong>Sucesso!</strong>Produto Cadastrado com sucesso
</div> 
@stop