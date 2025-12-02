<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmar Senha – Marcenaria Conectada</title>

  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('img/MR.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>

<!-- Navbar -->
<header class="navbar">
  <div class="nav-content">
    <div class="logo">
      <a href="{{ route('home') }}" title="Home">
        <img src="{{ asset('img/logo.png') }}" alt="Marcenaria Conectada">
      </a>
    </div>
    <div class="nav-icons">
        @auth
            <a href="{{ route('historico') }}" title="Histórico">
                <span class="material-icons">assignment</span>
            </a>
            <a href="{{ route('carrinho.index') }}" title="Carrinho">
                <span class="material-icons">shopping_cart</span>
            </a>
            <a href="{{ route('favoritos') }}" title="Favoritos">
            <span class="material-icons">favorite</span>
            </a>
            <a href="{{ route('visualizarcliente') }}" title="Favoritos">
            <span class="material-icons">account_circle</span>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a onclick="event.preventDefault(); this.closest('form').submit();" title="Logout">
                    <span class="material-icons">logout</span>
                </a>
            </form>
        @endauth
    </div>
  </div>
</header>


<section class="login">
  <h2>Confirmar Senha</h2>

  <p style="text-align:center; max-width:330px;">
    Para continuar, confirme sua senha novamente.
  </p>

  <form method="POST" action="{{ route('password.confirm') }}">
      @csrf

      <label for="password">Senha atual:</label>

      <div class="senha-container">
        <input type="password" id="password" name="password" required>
        <span class="material-icons toggle-senha" onclick="toggleSenha('password', this)">visibility</span>
      </div>

      @if ($errors->any())
      <p style="color:red; font-size:14px;">
        {{ $errors->first('password') }}
      </p>
      @endif

      <button type="submit" class="btn-login">Confirmar</button>
  </form>
</section>

<form method="POST" action="{{ route('profile.destroy') }}">
    @csrf
    @method('DELETE')

    <button type="submit" class="delete-btn">
        Deletar Conta
    </button>
</form>

<!-- Footer -->
<div class="footer">
  <h3>Redes Sociais</h3>
  <div class="social-icons">
      <a href="https://instagram.com/ale_moveis_rusticos" target="_blank">
      <img src="{{ asset('img/insta.png') }}" alt="Instagram">
      </a>
      <a href="https://wa.me/5541991822190" target="_blank">
      <img src="{{ asset('img/whats.png') }}" alt="WhatsApp">
      </a>
      <a href="mailto:alexandrealmeidanascimento@gmail.com">
      <img src="{{ asset('img/email.png') }}" alt="Email">
      </a>
  </div>
  <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
</div>

<script>
function toggleSenha(idCampo, icone) {
  const campo = document.getElementById(idCampo);

  if (campo.type === "password") {
    campo.type = "text";
    icone.textContent = "visibility_off";
  } else {
    campo.type = "password";
    icone.textContent = "visibility";
  }
}
</script>

</body>
</html>
