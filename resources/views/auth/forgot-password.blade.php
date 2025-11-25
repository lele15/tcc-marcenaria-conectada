<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada - Recuperar senha</title>

  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('img/MR.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>

<!-- Navbar -->
<header class="navbar">
  <div class="nav-content">

    <div class="logo">
      <a href="{{ route('home') }}">
        <img src="{{ asset('img/logo.png') }}" alt="Marcenaria Conectada">
      </a>
    </div>

    <div class="nav-icons">
      <!--<a href="{{ route('historico') }}"><span class="material-icons">assignment</span></a>
      <a href="{{ route('carrinho') }}"><span class="material-icons">shopping_cart</span></a>
      <a href="{{ route('favoritos') }}"><span class="material-icons">favorite</span></a>-->
      <a href="{{ route('register') }}"><span class="material-icons">person_add</span></a>
    </div>

  </div>
</header>

<!-- Formulário -->
<section class="login">
    <h2>Recuperar Senha</h2>

    @if(session('status'))
        <p class="session-status">{{ session('status') }}</p>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <label for="email">Digite seu e-mail:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
        @error('email') <p class="erro">{{ $message }}</p> @enderror

        <button type="submit" class="btn-login">Enviar link de recuperação</button>

        <a href="{{ route('login') }}" class="forgot">Voltar ao login</a>
    </form>
</section>

<!-- Rodapé -->
<div class="footer">
    <h3>Redes Sociais</h3>
    <div class="social-icons">
        <a href="https://instagram.com/ale_moveis_rusticos" target="_blank">
            <img src="{{ asset('img/insta.png') }}" alt="Instagram">
        </a>
        <a href="https://wa.me/5541992772292" target="_blank">
            <img src="{{ asset('img/whats.png') }}" alt="WhatsApp">
        </a>
        <a href="mailto:alexandrealmeidanascimento@gmail.com">
            <img src="{{ asset('img/email.png') }}" alt="Email">
        </a>
    </div>
    <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
</div>

</body>
</html>
