<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/PainelFabricante.css') }}">
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="nav-content">
      <!-- Logo -->
        <div class="logo">
            <a href="{{ route('home') }}">
                    <img src="/img/logo.png" alt="Marcenaria Conectada">
            </a>
        </div>
        <div class="nav-icons">
            <a href="" title="Histórico">
            <span class="material-icons">assignment</span>
            </a>
            <a href="{{ route('fabricante.view') }}" title="Perfil do Fabricante">
            <span class="material-icons">account_circle</span>
            </a>
            <a href="{{ route('home') }}" title="Home">
            <span class="material-icons">logout</span>
            </a>
        </div>
    </div>
  </header>

  <main class="container">
    <h2>Galeria de Produtos do fabricante</h2>
    <div class="product-gallery">

    @foreach ($produtos as $item )
      <!-- Produto 1 -->
      <div class="product-card">
        <img src="{{ asset('storage/'.$item->foto) }}" alt="Armario">
        <h3>{{$item->nome}}</h3>
        <span>CATEGORIA:{{$item->categoria}}</span>
        <br>
        <span>DESCRIÇÃO:{{ $item->descricao }}</span>
        <br>
        <span>MEDIDAS: {{ $item->altura }} x {{ $item->largura }} x {{ $item->profundidade }}</span>
        <br>
        <span>FABRICANTE: {{ $item->fabricante->name }}</span>
        <br>
        <span>PREÇO: {{ $item->preco }}</span>
        <p></p>
        <a href="{{route('produtos.edit', $item->id)}}" class="edit-btn" style="text-decoration: none;"><span class="material-icons">edit</span></a>

        <form action="{{route('produtos.destroy', $item->id)}}" method="post" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete-btn">
              <span class="material-icons">delete</span>
            </button>
        </form>


      <!--  <button class="btn">ativar</button> -->
     </div>
    @endforeach

      <!-- Card de adicionar -->
        <a href="{{route('produtos.create')}}" style="text-decoration: none;" class="product-card add-new">
            <span class="material-icons">add</span>
        </a>
    </div>

  </main>

  <!-- Rodapé -->
  <div class="footer">
    <h3>Redes Sociais</h3>
    <div class="social-icons">
      <a href="https://instagram.com/ale.snsc" target="_blank">
        <img src="img/insta.png" alt="Instagram">
      </a>
      <a href="https://wa.me/5541992772292" target="_blank">
        <img src="img/whats.png" alt="WhatsApp">
      </a>
      <a href="https://mail.google.com/mail/?view=cm&fs=1&to=alexandrealmeidanascimento@gmail.com" target="_blank">
        <img src="img/email.png" alt="Email">
      </a>
    </div>
    <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
  </div>
</body>
</html>
