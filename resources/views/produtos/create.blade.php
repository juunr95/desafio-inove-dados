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
        <form class="ui form" action="{{ route('salvar_produto') }}" method="POST">
            @csrf
            <h4 class="ui dividing header">Informações do produtos</h4>
            <div class="field">
                <div class="two fields">
                    <div class="field">
                        <label>Empresa</label>
                        <div class="ui disabled input">
                            <input type="text" name="empresa" value="{{ $empresa }}">
                        </div>
                    </div>
                    <div class="field">
                        <label>Nome</label>
                        <input type="text" name="nome">
                    </div>
                </div>
            </div>
            <div class="field">
                <label>Descrição</label>
                <input type="text" name="descricao" id="descricao">
            </div>
            <div class="field">
                <label>Foto</label>
                <input type="text" name="foto" id="foto">
            </div>
            <div class="field">
                <div class="two fields">
                    <div class="field">
                        <label>Valor</label>
                        <div class="ui right labeled input">
                        <label for="amount" class="ui label">R$</label>
                        <input type="text" name="valor" id="valor">
                        </div>
                    </div>
                    <div class="field">
                        <label>Estoque</label>
                        <input type="text" name="estoque" id="estoque">
                    </div>
                </div>
            </div>
            <button class="ui submit button">Adicionar produto</button>
            <div class="ui error message"></div>
        </form>
    </body>
</html>