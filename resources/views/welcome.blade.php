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
        <script src="{{ asset('js/index.js') }}"></script>
        <title> Desafio Inove Dados </title>
    </head>
    <body>
        <div class="ui container">
            <div class="ui secondary  menu">
                <a class="header item">Inove Market</a>
                <a class="active item">Início</a>
                <a class="item">Produtos</a>
                <div class="right menu">
                    <div class="item">
                        <div class="ui icon input">
                            <input type="text" placeholder="Procurar">
                            <i class="search icon"></i>
                        </div>
                    </div>
                    @if(isset(Auth::user()->email))
                    <div class="ui right dropdown item">
                        Bem vindo {{ Auth::user()->name }}
                        <i class="dropdown icon"></i>
                        <div class="menu">
                            @role('user')
                                <div class="item"><a href="{{ route('cart') }}">Minhas compras</a></div>
                            @else
                                <div class="item"><a href="{{ route('produtos') }}">Meus produtos</a></div>
                            @endrole
                            <div class="item">Meu perfil</div>
                            <div class="item"><a href="{{ route('sair') }}">Sair</a></div>
                        </div>
                        @else
                        <a class="ui item" href="{{ route('login') }}">Entrar</a>
                        <a class="ui item" href="{{ route('register') }}">Registrar</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="ui link cards">
                @foreach($items as $item)
                <div class="card">
                    <div class="image">
                        <img src="/img/avatar.png">
                    </div>
                    <div class="content">
                        <a class="header" href="{{ route('LoadCompanyShop', ['name' => $item->nome]) }}">{{ $item->nome }}</a>
                        <div class="meta">
                            <span class="category">Produtos</span>
                        </div>
                    </div>
                    <div class="extra content">
                        <div class="right floated author">
                            <p>{{ $item->razaosocial }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>