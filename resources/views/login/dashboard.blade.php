<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/semantic.min.css') }}">
        <script src="{{ asset('js/semantic.min.js') }}"></script>
        <script src="{{ asset('js/index.js') }}"></script>
        <title> Desafio Inove Dados </title>
    </head>
    <body>
        <div class="ui middle aligned center aligned grid">
            <div class="column">
            <div class="ui stacked secondary  segment">
            <br></br>
            <br></br>
            <br></br>
                <div class="ui large buttons">
                    <button class="ui button"><a href="{{ route('register_empresa') }}">Empresa</a></button>
                    <div class="or"></div>
                    <button class="ui button"><a href="{{ route('register_user') }}">Cliente</a></button>
                </div>
            <br></br>
            <br></br>
            <br></br>
            </div>
            </div>
        </div>
    </body>
</html>