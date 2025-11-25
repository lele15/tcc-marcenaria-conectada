<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada - Redefinir Senha</title>
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
            <a href="{{ route('historico') }}" title="Histórico">
              <span class="material-icons">assignment</span>
            </a>
            <a href="{{ route('carrinho') }}" title="Carrinho">
              <span class="material-icons">shopping_cart</span>
            </a>
            <a href="{{ route('favoritos') }}" title="Favoritos">
              <span class="material-icons">favorite</span>
            </a>
            <a href="{{ route('login') }}" title="Login">
              <span class="material-icons">login</span>
            </a>
        </div>
      </div>
    </header>

    <!-- Formulário de Redefinição -->
    <section class="login">
      <h2>Redefinir Senha</h2>

      <form method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email -->
        <label for="email">E-mail</label>
        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email', $request->email) }}"
            required
        >
        @error('email')
            <span style="color:red; font-size:14px;">{{ $message }}</span>
        @enderror

        <!-- Nova Senha -->
        <label for="senha">Nova Senha:</label>
        <div class="senha-container">
          <input type="password" id="senha" name="password" required>
          <span class="material-icons toggle-senha" onclick="toggleSenha('senha', this)">visibility</span>
        </div>
        @error('password')
            <span style="color:red; font-size:14px;">{{ $message }}</span>
        @enderror

        <!-- Confirmar Senha -->
        <label for="confirmarSenha">Confirmar Nova Senha:</label>
        <div class="senha-confirm-container">
          <input type="password" id="confirmarSenha" name="password_confirmation" required>
          <span class="material-icons toggle-senha" onclick="toggleSenha('confirmarSenha', this)">visibility</span>
        </div>

        <button type="submit" class="btn-login">Salvar Nova Senha</button>

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
