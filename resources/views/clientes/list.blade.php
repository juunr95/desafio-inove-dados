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
        <script src="{{ asset('js/clientes.js') }}"></script>
        <title> Desafio Inove Dados </title>
    </head>
    <body>
    <table class="ui celled table">
        <thead>
            <tr><th>Nome</th>
            <th>Sobrenome</th>
            <th>CPF</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Saldo</th>
            <th></th>
        </tr></thead>
            <tbody>
            @foreach ($clientes as $user)
            <tr>
                <td>{{ $user->nome }}</td>
                <td>{{ $user->sobrenome }}</td>
                <td>{{ $user->cpf }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->senha }}</td>
                <td>{{ $user->saldo }}</td>
                <td><div class="ui buttons">
                <button class="ui button"><a href="{{ route('editar_cliente', ['id' => $user->id]) }}">Editar</a></button>
                <button class="ui negative button"><a href="{{ route('excluir_cliente', ['id' => $user->id]) }}">Excluir</a></button></div></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <button class="ui button"><a href="{{ route('novo_usuario') }}">Novo usuário</a></button>
        <button class="ui button"><a href="/">Voltar</a></button>
    </body>
</html>