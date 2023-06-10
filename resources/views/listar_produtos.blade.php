@extends('home_app')
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
                                    <td><?= $p->id ?></td>
                                    <td><?= $p->nome ?></td>
                                    <td><?= $p->preco ?></td>
                                    <td><?= $p->quantidade ?></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop