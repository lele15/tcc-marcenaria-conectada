<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href= {{asset('img/MR.png')}} type="image/x-icon">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

         <!-- Navbar -->
  <header class="navbar">
    <div class="nav-content">
      <!-- Logo -->
      <div class="logo">
        <a href="{{ route('home') }}" title="Home">
          <img src="img/logo.png" alt="Marcenaria Conectada">
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
          <a href="CadastroCliente.html" title="Cadastro">
            <span class="material-icons">person_add</span>
          </a>
      </div>
    </div>
  </header>

    <!-- Formulário de Login -->
  <section class="login">
    <h2>Login</h2>
    <form action="#" method="post">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="example@gmail.com" required>

 <label for="senha">Senha:</label>
    <div class="senha-container">
      <input type="password" id="senha" name="senha" required>
      <span class="material-icons toggle-senha" onclick="toggleSenha('senha', this)">visibility</span>
    </div>

    <label for="confirmarSenha">Confirmar senha:</label>
    <div class="senha-confirm-container">
      <input type="password" id="confirmarSenha" name="confirmarSenha" required>
      <span class="material-icons toggle-senha" onclick="toggleSenha('confirmarSenha', this)">visibility</span>
    </div>
      <button type="submit" class="btn-login">Sign In</button>

      <a href="#" class="forgot">Forgot password?</a>
    </form>
  </section>

  <!-- Rodapé -->
  <div class="footer">
  <h3>Redes Sociais</h3>
  <div class="social-icons">
    <a href="https://instagram.com/ale.snsc" target="_blank">
      <img src="img/insta.png" alt="Instagram">
    </a>
    <a href="https://wa.me/5541992772292" target="_blank">
      <img src="img/whats.png" alt="WhatsApp">
    </a>
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=alessandrasilvanascimento1501@gmail.com" target="_blank">
      <img src="img/email.png" alt="Email">
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
