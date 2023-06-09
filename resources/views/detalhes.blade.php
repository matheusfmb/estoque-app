<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b88bdd215f.js" crossorigin="anonymous"></script>
    <title>Produto</title>
</head>
<body>
    <h1>Detalhes do Produto</h1>
    <ul>
        <li><b>Id produto:</b> {{ $p->id }}</li>
        <li><b>Nome:</b> {{ $p->nome }}</li>
        <li><b>Preço:</b> {{ $p->preco }} </li>
        <li><b>Quantidade em estoque:</b> {{ $p->quantidade }}</li>
    </ul>
</body>
</html>