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
        <script src="{{ asset('js/empresas  .js') }}"></script>
        <title> Desafio Inove Dados </title>
    </head>
    <body>
    <table class="ui celled table">
        <thead>
            <tr><th>CNPJ</th>
            <th>Nome</th>
            <th>Razão Social</th>
            <th>Telefone</th>
            <th>Email</th>
            <th></th>
        </tr></thead>
            <tbody>
            @foreach ($empresas as $empresa)
            <tr>
                <td>{{ $empresa->cnpj }}</td>
                <td>{{ $empresa->razaosocial }}</td>
                <td>{{ $empresa->nome }}</td>
                <td>{{ $empresa->telefone }}</td>
                <td>{{ $empresa->email }}</td>
                <td><div class="ui buttons">
                <button class="ui button"><a href="{{ route('editar_empresa', ['id' => $empresa->id]) }}">Editar</a></button>
                <button class="ui negative button"><a href="{{ route('excluir_empresa', ['id' => $empresa->id]) }}">Excluir</a></button></div></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <button class="ui button"><a href="{{ route('nova_empresa') }}">Cadastra empresa</a></button>
        <button class="ui button">Voltar</button>
    </body>
</html>