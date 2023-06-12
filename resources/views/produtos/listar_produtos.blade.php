@extends('home_app')
@section('conteudo')

@if (empty($produtos))
<div class="alert alert-warning" role="alert">
    Você não tem nenhum produto Cadastrado
</div> 
@stop


@else
@section('conteudo')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
            <div class="container-fluid px-4">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Lista de Produtos
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Quantidade</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Id</th>
                                    <th>Nome</th>
                                    <th>Valor</th>
                                    <th>Quantidade</th>                            
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($produtos as $p)                                
                                <tr>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->nome}}</td>
                                    <td>{{$p->preco  }}</td>
                                    <td>{{$p->quantidade}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @foreach ($produtos as $p)
                        @if ($p->quantidade <= 3)
                        <div class="alert alert-warning" role="alert">
                            Existem produtos com baixo estoque de 3 ou menos
                            @break
                        </div> 
                        @endif
                @endforeach
            </div>
        </div>
    </div>
@stop
@endif