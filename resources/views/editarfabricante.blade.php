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
      <a href="home.html">
        <img src="img/logo.png" alt="Marcenaria Conectada">
      </a>
    </div>

    <!-- Ícones -->
    <div class="nav-icons">
      <a href="{{ route ('historicofabricante') }}" title="Histórico">
        <span class="material-icons">assignment</span>
      </a>
      <a href="{{ route ('VisualizarFabricante') }}" title="Perfil">
          <span class="material-icons">account_circle</span>
      </a>
      <a href="{{ route ('home') }}" title="home">
          <span class="material-icons">logout</span>
      </a>
    </div>
  </div>
</header>

  <!-- Formulário Editar Perfil -->
  <section class="cadastro">
    <h2>Atualizar meios de contato</h2>
    <form action="#" method="post">
      <label for="nome">Instagram:</label>
      <input type="text" id="nome" name="nome" value="Alexandre de Almeida Nascimento" required>

        <label for="email">WhatsApp:</label>
      <input type="email" id="email" name="email" value="5541992772292" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="alexandrealmeidanascimento@gmail.com" required>

            <label for="senha">Atualizar Senha:</label>
    <div class="senha-container">
      <input type="password" id="senha" name="senha" placeholder="********" value="987654321" required>
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
