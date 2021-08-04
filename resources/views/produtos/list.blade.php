<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script src="{{ asset('js/produtos.js') }}"></script>
        <title> Desafio Inove Dados </title>
    </head>
    <body>
    <table class="ui celled table">
        <thead>
            <tr><th>ID</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Estoque</th>
            <th></th>
        </tr></thead>
            <tbody>
            @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->valor }}</td>
                <td>{{ $produto->estoque }}</td>
                <td><div class="ui buttons">
                <button class="ui button"><a href="{{ route('editar_produto', ['id' => $produto->id]) }}">Editar</a></button>
                <button class="ui negative button"><a href="{{ route('excluir_produto', ['id' => $produto->id]) }}">Excluir</a></button></div></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <button class="ui button"><a href="{{ route('novo_produto') }}">Cadastrar produto</a></button>
        <button class="ui button">Voltar</button>
    </body>
</html>