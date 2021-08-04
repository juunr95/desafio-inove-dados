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
    <h2 class="ui image header">
      <div class="content">
        Faça login na sua conta
      </div>
    </h2>

    @if ($message = Session::get('error'))
    <div class="alert alert-dange alert-block">
      <strong>{{ $message }}</strong>
    @endif
    
    <form action="{{ route('enviar_login') }}" method="POST" class="ui large form">
      @csrf
      <div class="ui stacked secondary  segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="email" placeholder="Email">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Senha">
          </div>
        </div>
        <button class="ui fluid large teal submit button">Login</button>
      </div>
      <div class="ui error message" ></div>
    </form>
  </div>
</div>
    </body>
</html>