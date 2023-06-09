<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b88bdd215f.js" crossorigin="anonymous"></script>
    <title>Controle de Estoque</title>
</head>
<body>
<div class="container"></div>
    <h1 style="text-align: center">Listagem de Produtos<h1>
        <table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome</th>
        <th scope="col">Preco</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Vizualizar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produtos as $p)
        <tr>
        <td><?= $p->id ?></td>
        <td><?= $p->nome ?></td>
        <td><?= $p->preco ?></td>
        <td><?= $p->quantidade ?></td>
        <td>
            <a href="/produtos/mostra/{{$p->id}}">
                <i class="fa-solid fa-magnifying-glass" style="color: #808080;"></i>
            </a>
        </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
</body>
</html>