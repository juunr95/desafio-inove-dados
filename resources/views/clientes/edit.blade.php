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
        <form class="ui form" action="{{ route('atualizar_cliente', ['id' => $cliente->id]) }}" method="POST">
            @csrf
            <h4 class="ui dividing header">Informações do usuário</h4>
            <div class="field">
                <div class="two fields">
                    <div class="field">
                        <label>Nome</label>
                        <input type="text" name="nome" value="{{ $cliente->nome }}">
                    </div>
                    <div class="field">
                        <label>Sobrenome</label>
                        <input type="text" name="sobrenome" value="{{ $cliente->sobrenome }}">
                    </div>
                </div>
            </div>
            <div class="field">
                <label>CPF</label>
                <input type="text" name="cpf" id="cpf" value="{{ $cliente->cpf }}" readonly="readonly" disabled="disabled">
            </div>
            <div class="field">
                <label>Email</label>
                <input type="text" name="email" id="email" value="{{ $cliente->email }}">
            </div>
            <div class="field">
                <div class="two fields">
                    <div class="field">
                        <label>Senha</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <div class="field">
                        <label>Confirme sua senha</label>
                        <input type="password" name="confirmacao" id="confirmacao">
                    </div>
                </div>
            </div>
            <div class="ui primary submit button">Aplicar</div>
            <div class="ui error message"></div>
        </form>
    </body>
</html>