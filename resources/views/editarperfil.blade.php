<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/EditarPerfil.css') }}">
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
          <a href="{{ route ('home') }}" title="home">
            <span class="material-icons">logout</span>
            </a>
      </div>
    </div>
  </header>

<!-- Formulário Editar Perfil -->
  <section class="cadastro">
    <h2>Editar Perfil</h2>
    <form action="#" method="post">
      <label for="nome">Nome Completo:</label>
      <input type="text" id="nome" name="nome" value="Ana dos Santos" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="anadossantos@gmail.com" required>

      <label for="cpf">CPF:</label>
      <input type="text" id="cpf" name="cpf" value="123.456.789-00" required>

      <label for="senha">Atualizar Senha:</label>
    <div class="senha-container">
      <input type="password" id="senha" name="senha" placeholder="********" value="123456789" required>
      <span class="material-icons toggle-senha" onclick="toggleSenha('senha', this)">visibility</span>
    </div>

    <label for="confirmarSenha">Confirmar senha:</label>
    <div class="senha-confirm-container">
      <input type="password" id="confirmarSenha" name="confirmarSenha" placeholder="********" required>
      <span class="material-icons toggle-senha" onclick="toggleSenha('confirmarSenha', this)">visibility</span>
    </div>

      <!-- Botões -->
     <div class="btn-group">
        <button type="button" class="cancelar">Cancelar</button>
        <button type="submit" class="salvar">Salvar Alterações</button>
      </div>
    </form>
  </section>

<div class="footer">
            <h3>Redes Sociais</h3>
            <div class="social-icons">
                <a href="https://instagram.com/ale_moveis_rusticos" target="_blank">
                <img src="img/insta.png" alt="Instagram">
                </a>
                <a href="https://wa.me/5541992772292" target="_blank">
                <img src="img/whats.png" alt="WhatsApp">
                </a>
                <a href="mailto:alexandrealmeidanascimento@gmail.com">
                <img src="img/email.png" alt="Email">
                </a>
            </div>
                <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
        </div>

  <!-- Script do olhinho da senha -->
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
