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

 <header class="navbar">
        <div class="nav-content">
            <!-- Logo -->
            <div class="logo">
                <a href="{{ route('home') }}" title="Home">
                    <img src="img/logo.png" alt="Marcenaria Conectada">
                </a>
                </div>

            <div class="nav-icons">
            @auth
                <a href="{{ route('historico') }}" title="Histórico">
                    <span class="material-icons">assignment</span>
                </a>
                <a href="{{ route('carrinho') }}" title="Carrinho">
                    <span class="material-icons">shopping_cart</span>
                </a>
                <a href="{{ route('favoritos') }}" title="Favoritos">
                <span class="material-icons">favorite</span>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a onclick="event.preventDefault(); this.closest('form').submit();" title="Logout">
                        <span class="material-icons">logout</span>
                    </a>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" title="Login">
                    <span class="material-icons">login</span>
                </a>

                <a href="{{ route('register') }}" title="Login">
                    <span class="material-icons">person_add</span>
                </a>
            @endguest
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
           @foreach ($produtos as $item )
            <div class="item">
            <img src="{{ asset('storage/'.$item->foto) }}" alt="Armario">
            <h3>{{$item->nome}}</h3>
            <span>Categoria:{{$item->categoria}}</span>
            <br>
            <span>Descrição:{{ $item->descricao }}</span>
            <br>
            <span>Medidas: {{ $item->altura }} x {{ $item->largura }} x {{ $item->profundidade }}</span>
            <br>
            <span>Fabricante: {{ $item->fabricante->nome }}</span>
            <br>
            <span>Preço: {{ $item->preco }}</span>
            <p></p>
                <div class="actions">
                    <a href="{{route('favoritos')}}">
                        <span class="material-icons favorito">favorite_border</span>
                    </a>
                    <a href="{{route('carrinho')}}">Adicionar ao carrinho</a>
                </div>
            </div>
          @endforeach

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
