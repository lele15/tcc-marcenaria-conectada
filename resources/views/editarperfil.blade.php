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
          <a href="{{ route('login') }}" title="Login">
            <span class="material-icons">login</span>
          </a>
          <a href="CadastroCliente.html" title="Cadastro">
            <span class="material-icons">person_add</span>
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

      <label for="senha">Atualizar senha:</label>
      <div class="senha-container">
        <input type="password" id="senha" name="senha" value="ana@123" required>
        <span class="material-icons toggle-senha" onclick="toggleSenha()">visibility</span>
      </div>

      <!-- Botões -->
     <div class="btn-group">
        <button type="button" class="cancelar">Cancelar</button>
        <button type="submit" class="salvar">Salvar Alterações</button>
      </div>
    </form>
  </section>

  <!-- Rodapé -->
  <div class="footer">
    <h3>Redes Sociais</h3>
    <div class="social-icons">
      <a href="https://instagram.com" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
      <a href="https://wa.me/5500000000000" target="_blank"><img src="img/whats.png" alt="WhatsApp"></a>
      <a href="mailto:contato@exemplo.com"><img src="img/email.png" alt="Email"></a>
    </div>
    <p>Atendimento:<br>segunda à sexta<br>8h às 18h</p>
  </div>

  <!-- Script do olhinho da senha -->
  <script>
    function toggleSenha() {
      const senha = document.getElementById('senha');
      const icone = document.querySelector('.toggle-senha');
      if (senha.type === 'password') {
        senha.type = 'text';
        icone.textContent = 'visibility_off';
      } else {
        senha.type = 'password';
        icone.textContent = 'visibility';
      }
    }
  </script>
</body>
</html>
