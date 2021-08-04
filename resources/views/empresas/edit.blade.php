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
        <script src="{{ asset('js/empresas.js') }}" type="text/javascript"></script>
        <title> Desafio Inove Dados </title>
    </head>
    <body>
        <form class="ui form" action="{{ route('atualizar_empresa', ['id' => $empresa->id]) }}" method="POST">
            @csrf
            <h4 class="ui dividing header">Empresa:</h4>
            <div class="fields">
                <div class="three wide field">
                    <div class="field">
                        <label>CNPJ</label>
                        <input type="text" name="cnpj" id="CNPJ" value="{{ $empresa->cnpj }}">
                    </div>
                </div>
                <div class="five wide field">
                    <label>Razão Social</label>
                    <input type="text" name="razaosocial" id="razaosocial" value="{{ $empresa->razaosocial }}">
                </div>
                <div class="eight wide field">
                    <label>Nome Fantasia</label>
                    <input type="text" name="nome" id="nome" value="{{ $empresa->nome }}">
                </div>
            </div>
            <h4 class="ui dividing header">Informações extra:</h4>
            <div class="fields">
                <div class="two wide field">
                    <div class="field">
                        <label>CEP</label>
                        <input type="text" name="cep" id="cep" value="{{ $empresa->cep }}">
                    </div>
                </div>
                <div class="five wide field">
                    <label>Rua</label>
                    <input type="text" name="rua" id="rua" value="{{ $empresa->rua }}">
                </div>
                <div class="one wide field">
                    <label>Número</label>
                    <input type="text" name="numero" id="numero" value="{{ $empresa->numero }}">
                </div>
                <div class="three wide field">
                    <label>Bairro</label>
                    <input type="text" name="bairro" id="bairro" value="{{ $empresa->bairro }}">
                </div>
                <div class="three wide field">
                    <label>Complemento</label>
                    <input type="text" name="complemento" id="complemento" value="{{ $empresa->complemento }}">
                </div>
                <div class="three wide field">
                    <label>Cidade</label>
                    <input type="text" name="cidade" id="cidade" value="{{ $empresa->cidade }}">
                </div>
                <div class="one wide field">
                    <label>Estado</label>
                    <input type="text" name="estado" id="estado" value="{{ $empresa->estado }}">
                </div>
            </div>
            <h4 class="ui dividing header">Informações de contato:</h4>
            <div class="fields">
                <div class="three wide field">
                    <div class="field">
                        <label>Email</label>
                        <input type="text" name="email" id="email" value="{{ $empresa->email }}">
                    </div>
                </div>
                <div class="five wide field">
                    <label>Telefone</label>
                    <input type="text" name="telefone" id="telefone" value="{{ $empresa->telefone }}">
                </div>
            </div>
            <button class="ui button">Salvar alterações</div>
        </form>
    </body>
</html>