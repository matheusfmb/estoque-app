@extends('principal')
@section('conteudo')
<h1>Detalhes do Produto</h1>
<ul>
    <li><b>Id produto:</b> {{ $p->id }}</li>
    <li><b>Nome:</b> {{ $p->nome }}</li>
    <li><b>Preço:</b> {{ $p->preco }} </li>
    <li><b>Quantidade em estoque:</b> {{ $p->quantidade }}</li>
</ul>
@stop