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
                    {{--<a href="{{ route('carrinho') }}" title="Carrinho">
                    <span class="material-icons">shopping_cart</span>
                    </a>
                    <a href="{{ route('favoritos') }}" title="Favoritos">
                    <span class="material-icons">favorite</span>
                    </a>--}}
                    <a href="{{ route ('visualizarcliente') }}" title="Perfil">
                        <span class="material-icons">account_circle</span>
                    </a>
                    <a href="{{ route ('home') }}" title="Home">
                        <span class="material-icons">logout</span>
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
        <h3>Cristaleira</h3>
            <span>Categoria: Cozinha</span>
                <br>
                <span>Móvel rústico vintage.</span>
                <br>
                <span>Medidas: 180 x 60 x 45</span>
                <br>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
                <br>
                <span>Preço: 800,00</span>
                <p></p>
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
        <h3>Aparador</h3>
                <span>Categoria: Sala</span>
                <br>
                <span>Móvel rústico vintage e moderno.</span>
                <br>
                <span>Medidas: 80 x 50 x 40</span>
                <br>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
                <br>
                <span>Preço: 500,00</span>
                <p></p>
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
            <span>Categoria: Sala</span>
                <br>
                <span>Cadeira rústica e moderna.</span>
                <br>
                <span>Medidas: 100 x 45</span>
                <br>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
                <br>
                <span>Preço: 199,00</span>
                <p></p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>
      <button class="status negociacao">Em negociação</button>
      <button class="recomprar">Comprar novamente</button>
    </div>
  </div>


  <div class="pedido">
    <img src="img/guardaroupa.png" alt="Produto 4">
    <div class="pedido-info">
        <h3>Guarda-roupa</h3>
            <span>Categoria: Quarto</span>
                <br>
                <span>móvel rustico e delicado</span>
                <br>
                <span>Medidas: 200 x 150 x 50</span>
                <br>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
                <br>
                <span>Preço: 4500,00</span>
                <p></p>
    <div class="pedido-status">
      <p>Status:</p>
      <button class="status cancelado">Cancelado</button>
      <button class="recomprar">Comprar novamente</button>
    </div>
  </div>

 <div class="pedido">
    <img src="img/armario.png" alt="Produto 4">
    <div class="pedido-info">
        <h3>Armario</h3>
            <span>Categoria: Sala</span>
                <br>
                <span>Rústico com portas ripadas.</span>
                <br>
                <span>Medidas: 180 x 60 x 40</span>
                <br>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
                <br>
                <span>Preço: 1500,00</span>
                <p></p>
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
                <a href="https://instagram.com/ale_moveis_rusticos" target="_blank">
                <img src="img/insta.png" alt="Instagram">
                </a>
                <a href="https://wa.me/5541991822190" target="_blank">
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
