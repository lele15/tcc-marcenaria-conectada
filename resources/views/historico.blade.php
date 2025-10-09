<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/historico.css') }}">
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

<!-- Conteúdo Histórico -->
<section class="historico">
  <h1>Histórico de pedidos</h1>

  <!-- Pedido 1 -->
  <div class="pedido">
    <img src="img/cristaleira.png" alt="Produto 1">
    <div class="pedido-info">
      <h3>Produto 1</h3>
      <p>Descrição: -----------</p>
      <p>Preço: R$ 3.500,00</p>
      <p>Feito por: Danilo Junqueira</p>
      <p>Categoria: Cozinha</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>
      <button class="status enviado">Enviado</button>
      <button class="recomprar">Comprar novamente</button>
    </div>
  </div>

  <!-- Pedido 2 -->
  <div class="pedido">
    <img src="img/aparador.png" alt="Produto 2">
    <div class="pedido-info">
      <h3>Produto 2</h3>
      <p>Descrição: -----------</p>
      <p>Preço: R$ 3.000,00</p>
      <p>Categoria: Sala</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>
      <button class="status visualizado">Visualizado</button>
      <button class="recomprar">Comprar novamente</button>
    </div>
  </div>

  <div class="pedido">
    <img src="img/cadeira.png" alt="Produto 3">
    <div class="pedido-info">
      <h3>Cadeira</h3>
      <p>Descrição: -----------</p>
      <p>Preço: R$ 100,00</p>
      <p>Categoria: Cozinha</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>
      <button class="status negociacao">Em negociação</button>
      <button class="recomprar">Comprar novamente</button>
    </div>
  </div>


  <div class="pedido">
    <img src="img/armario.png" alt="Produto 4">
    <div class="pedido-info">
      <h3>Armario</h3>
      <p>Descrição: -----------</p>
      <p>Preço: R$ 2.000,00</p>
      <p>Categoria: Sala</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>
      <button class="status cancelado">Cancelado</button>
      <button class="recomprar">Comprar novamente</button>
    </div>
  </div>
</section>

<!-- Footer -->
<div class="footer">
  <h3>Redes Sociais</h3>
  <div class="social-icons">
    <a href="https://instagram.com/ale.snsc" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
    <a href="https://wa.me/5541992772292" target="_blank"><img src="img/whats.png" alt="WhatsApp"></a>
    <a href="mailto:alessandrasilvanascimento1501@gmail.com" target="_blank"><img src="img/email.png" alt="Email"></a>
  </div>
  <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
</div>

</body>
</html>
