<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Marcenaria Conectada - Favoritos</title>
<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/favoritos.css') }}">
</head>
<body>

<header class="navbar">
    <div class="nav-content">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="img/logo.png" alt="Logo"></a>
        </div>
        <div class="nav-icons">
            <a href="{{ route('historico') }}"><span class="material-icons">assignment</span></a>
            <a href="{{ route('carrinho.index') }}"><span class="material-icons">shopping_cart</span></a>
            <a href="{{ route('favoritos') }}"><span class="material-icons">favorite</span></a>
            <a href="{{ route('visualizarcliente') }}"><span class="material-icons">account_circle</span></a>
            <a href="{{ route('home') }}"><span class="material-icons">logout</span></a>
        </div>
    </div>
</header>

<section class="gallery">
    @forelse($favoritos as $fav)
        @php $produto = $fav->produto; @endphp
        <div class="item">
            <img src="{{ asset('storage/' . $produto->foto) }}" alt="{{ $produto->nome }}">
            <h3>{{ $produto->nome }}</h3>
            <span>Categoria: {{ $produto->categoria }}</span><br>
            <span>{{ $produto->descricao }}</span><br>
            <span>Medidas: {{ $produto->altura }} x {{ $produto->largura }} x {{ $produto->profundidade }}</span><br>
            <span>Fabricante: {{ $produto->fabricante->name ?? 'Desconhecido' }}</span><br>
            <span>Preço: R$ {{ number_format($produto->preco, 2, ',', '.') }}</span>

            <div class="actions">
                <!-- Toggle favorito -->
                <form action="{{ route('favoritos.toggle', $produto->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="material-icons">
                        {{ $fav ? 'favorite' : 'favorite_border' }}
                    </button>
                </form>

                <!-- Adicionar ao carrinho -->
                <form action="{{ route('carrinho.adicionar') }}" method="POST">
                    @csrf
                    <input type="hidden" name="produto_id" value="{{ $produto->id }}">
                    <button>Adicionar ao carrinho</button>
                </form>
            </div>
        </div>
    @empty
        <p style="text-align:center; margin-top:20px; font-size:18px;">
            Nenhum produto favoritado ❤️
        </p>
    @endforelse
</section>

<!-- Footer -->
<div class="footer">
    <h3>Redes Sociais</h3>
    <div class="social-icons">
        <a href="https://instagram.com/ale_moveis_rusticos" target="_blank"><img src="img/insta.png" alt="Instagram"></a>
        <a href="https://wa.me/5541991822190" target="_blank"><img src="img/whats.png" alt="WhatsApp"></a>
        <a href="mailto:alexandrealmeidanascimento@gmail.com"><img src="img/email.png" alt="Email"></a>
    </div>
    <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
</div>

</body>
</html>
