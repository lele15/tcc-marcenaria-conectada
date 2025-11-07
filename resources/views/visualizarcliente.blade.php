<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/VisualizarCliente.css') }}">
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
      <div class="nav-icons">
        <a href="{{ route('carrinho') }}" title="Carrinho">
            <span class="material-icons">shopping_cart</span>
        </a>
        <a href="{{ route('favoritos') }}" title="Favoritos">
            <span class="material-icons">favorite</span>
        </a>
        <a href="{{ route ('home') }}" title="Home">
                <span class="material-icons">logout</span>
            </a>
      </div>
    </div>
  </header>

    <div class="visualizar">
        <!-- Ícone de cliente -->
        <div class="profile-photo">
                <span class="material-icons">account_circle</span>
        </div>

        <!-- Título -->
        <h1>Meu Perfil</h1>

        <!-- Informações -->
        <div class="profile-info">
            <p><strong>Nome Completo:</strong> Ana dos Santos</p>
            <p><strong>CPF:</strong> 123.456.789-12</p>
            <p><strong>Email:</strong> Anadosantos@gmail.com</p>
        </div>

        <button class="history-btn" onclick="window.location.href='Historico.html'">Histórico de Pedidos</button>

      <div class="profile-actions">
        <button class="edit-btn" onclick="window.location.href='EditarPerfil.html'"><span class="material-icons">edit</span>Editar Perfil</button>
        <button class="delete-btn"><span class="material-icons">delete</span> Excluir Perfil</button>
      </div>
    </div>

<!-- Footer -->
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


</body>
</html>
