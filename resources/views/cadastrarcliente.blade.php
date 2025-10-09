<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/CadastroCliente.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

    <!-- Ícones -->
    <div class="nav-icons">
      <a href="Historico.html" title="Histórico">
        <span class="material-icons">assignment</span>
      </a>

      <!-- Carrinho com contador -->
      <a href="Carrinho.html" class="cart-link" title="Carrinho">
        <span class="material-icons">shopping_cart</span>
        <span class="cart-count" id="cart-counter">0</span>
      </a>

      <!-- Favoritos clicável -->
      <a href="Favoritos.html" class="favorite-link" title="Favoritos">
        <span class="material-icons" id="favorite-icon">favorite_border</span>
      </a>

      <a href="Login.html" title="Login">
        <span class="material-icons">login</span>
      </a>
      <a href="CadastroCliente.html" title="Cadastro">
        <span class="material-icons">person_add</span>
      </a>
    </div>
  </div>
</header>

        <!-- Formulário de Cadastro -->
        <section class="cadastro">
            <h2>Cadastra-se</h2>
            <form action="#" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

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
            <button type="submit">Cadastrar</button>
            </form>
        </section>

        <!-- Rodapé -->
        <div class="footer">
            <h3>Redes Sociais</h3>
            <div class="social-icons">
                <a href="https://instagram.com" target="_blank">
                <img src="img/insta.png" alt="Instagram">
                </a>
                <a href="https://wa.me/5500000000000" target="_blank">
                <img src="img/whats.png" alt="WhatsApp">
                </a>
                <a href="mailto:contato@exemplo.com">
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
