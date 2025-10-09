<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
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

  <!-- Hero / título -->
  <section class="hero">
    <h1>Marcenaria Conectada</h1>
    <p>Transformando ideias em móveis, com tecnologia.</p>
  </section>

  <!-- Galeria -->
  <section class="gallery">
    <div class="item">
      <img src="img/aparador.png" alt="Móvel 1">
      <h3>Aparador</h3>
      <p>Móvel para quarto</p>
      <div class="actions">
        <span class="material-icons">favorite</span>
        <button>Adicionar ao carrinho</button>
      </div>
    </div>
    <div class="item">
      <img src="img/armario.png" alt="Comoda">
      <h3>Armario</h3>
      <p>Móvel rústico com portas ripadas</p>
      <div class="actions">
        <span class="material-icons">favorite</span>
        <button>Adicionar ao carrinho</button>
      </div>
    </div>
    <div class="item">
      <img src="img/cadeira.png" alt="Móvel 2">
      <h3>Cadeira</h3>
      <p>Rústica e moderna</p>
      <div class="actions">
        <span class="material-icons">favorite</span>
        <button>Adicionar ao carrinho</button>
      </div>
    </div>
    <div class="item">
      <img src="img/cristaleira.png" alt="Móvel 2">
      <h3>Cristaleira</h3>
      <p>Móvel rústico delicado, madeira clara</p>
      <div class="actions">
        <span class="material-icons">favorite</span>
        <button>Adicionar ao carrinho</button>
      </div>
    </div>
    <!-- repete os itens -->
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

<script>
  // =======================
  // FAVORITO CLICÁVEL
  // =======================
  const favoriteIcon = document.getElementById('favorite-icon');
  favoriteIcon.addEventListener('click', (e) => {
    e.preventDefault(); // evita seguir o link
    favoriteIcon.classList.toggle('favorited');
    favoriteIcon.textContent = favoriteIcon.classList.contains('favorited') ? 'favorite' : 'favorite_border';
  });

  // =======================
  // CARRINHO
  // =======================
  const buttons = document.querySelectorAll('.gallery button');
  const cartCounter = document.querySelector('#cart-counter');

  // Função para atualizar contador
  function updateCartCounter() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cartCounter.textContent = cart.length;
  }

  // Função para adicionar item
  function addToCart(item) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(item);
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartCounter();
    alert(`${item.name} adicionado ao carrinho!`);
  }

  // Adiciona evento a cada botão
  buttons.forEach((btn) => {
    btn.addEventListener('click', () => {
      const itemDiv = btn.closest('.item');
      const item = {
        name: itemDiv.querySelector('h3').textContent,
        description: itemDiv.querySelector('p').textContent,
        img: itemDiv.querySelector('img').src,
        quantity: 1
      };
      addToCart(item);
    });
  });

  // Atualiza contador ao carregar a página
  updateCartCounter();

</script>

</body>
</html>
