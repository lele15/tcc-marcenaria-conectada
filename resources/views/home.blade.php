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
                <div class="actions">
                    <span class="material-icons favorito" onclick="toggleFavorito(this)">favorite_border</span>
                    <button>Adicionar ao carrinho</button>
                </div>
            </div>
            <div class="item">
            <img src="img/armario.png" alt="Comoda">
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
            <div class="actions">
                    <span class="material-icons favorito" onclick="toggleFavorito(this)">favorite_border</span>
                    <button>Adicionar ao carrinho</button>
                </div>
            </div>
            <div class="item">
            <img src="img/cadeira.png" alt="Móvel 2">
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
            <div class="actions">
                    <span class="material-icons favorito" onclick="toggleFavorito(this)">favorite_border</span>
                    <button>Adicionar ao carrinho</button>
            </div>
            </div>
            <div class="item">
            <img src="img/cristaleira.png" alt="Móvel 2">
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
            <div class="actions">
                    <span class="material-icons favorito" onclick="toggleFavorito(this)">favorite_border</span>
                    <button>Adicionar ao carrinho</button>
                </div>
            </div>

             <div class="item">
            <img src="img/gabinete.png" alt="Mesa">
            <h3>Mesa</h3>
            <span>Categoria: Cozinha</span>
                <br>
                <span>Mesa de jantar moderna</span>
                <br>
                <span>Medidas: 80 x 40</span>
                <br>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
                <br>
                <span>Preço: 1500,00</span>
                <p></p>
            <div class="actions">
                    <span class="material-icons favorito" onclick="toggleFavorito(this)">favorite_border</span>
                    <button>Adicionar ao carrinho</button>
                </div>
            </div>

            <div class="item">
            <img src="img/guardaroupa.png" alt="guardaroupa">
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
            <div class="actions">
                    <span class="material-icons favorito" onclick="toggleFavorito(this)">favorite_border</span>
                    <button>Adicionar ao carrinho</button>
                </div>
            </div>
            <!-- repete os itens -->
        </section>

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

<script>
  // FAVORITO CLICÁVEL
  const favoriteIcon = document.getElementById('favorite-icon');
  favoriteIcon.addEventListener('click', (e) => {
    e.preventDefault(); // evita seguir o link
    favoriteIcon.classList.toggle('favorited');
    favoriteIcon.textContent = favoriteIcon.classList.contains('favorited') ? 'favorite' : 'favorite_border';
  });

  // CARRINHO
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
