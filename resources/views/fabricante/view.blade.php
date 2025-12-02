<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('css/VisualizarFabricante.css') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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
            <a href="{{ route('produtos.create') }}" title="Cadastro de Produto">
                <span class="material-icons">add</span>
            </a>
            <a href="{{ route('produtos.index') }}" title="Painel do Fabricante">
                <span class="material-icons">grid_view</span>
            </a>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="material-icons">logout</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="post">
                @csrf
            </form>
      </div>
    </div>
  </header>
<div class="visualizar">
        <div class="profile-photo">
            <span class="material-icons">account_circle</span>
        </div>
        <h1>Meu Perfil</h1>
        <div class="profile-info">
            <p><strong>Nome Completo:</strong> {{ $fabricante->nome }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Instagram:</strong> {{ $fabricante->instagram }}</p>
            <p><strong>Whatsapp:</strong> {{ $fabricante->whatsapp }}</p>
            <p><strong>CNPJ:</strong> {{ $fabricante->cnpj }}</p>

        </div>

       {{-- <button class="history-btn" onclick="window.location.href='{{ route('historicofabricante') }}'"> Histórico de
            Pedidos
        </button>
        <div class="profile-actions">
            <button class="edit-btn" onclick="window.location.href='{{ route('fabricante.edit') }}'">Editar Perfil
            </button>
        </div>--}}
    </div>


</body>
</html>
