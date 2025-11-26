<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada - Login</title>

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
      <a href="{{ route('register') }}">
        <span class="material-icons">person_add</span>
      </a>
    </div>

  </div>
</header>

<!-- Formulário de Login -->
<section class="login">
    <h2>Login</h2>

    <!-- status de sessão (ex: "senha redefinida com sucesso") -->
    @if (session('status'))
        <p class="session-status">{{ session('status') }}</p>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- E-mail -->
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}"
               placeholder="example@gmail.com" required autofocus>
        @error('email')
            <p class="erro">{{ $message }}</p>
        @enderror

        <!-- Senha -->
        <label for="senha">Senha:</label>
        <div class="senha-container">
            <input type="password" id="senha" name="password" required>
            <span class="material-icons toggle-senha"
                  onclick="toggleSenha('senha', this)">visibility</span>
        </div>
        @error('password')
            <p class="erro">{{ $message }}</p>
        @enderror

        <!-- Botão -->
        <button type="submit" class="btn-login">Entrar</button>

        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}" class="forgot">Esqueceu a senha?</a>
        @endif
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
