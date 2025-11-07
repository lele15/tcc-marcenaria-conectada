<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Painel do Fabricante</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/PainelFabricante.css') }}">
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
        <a href="{{ route('visualizarfabricante') }}" title="Perfil do Fabricante">
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
      <!-- Produto 1 -->
      <div class="product-card">
        <div class="menu">
          <span class="material-icons">more_vert</span>
          <div class="dropdown">
            <a href="{{ route('editarproduto') }}" title="Editar Produto">Editar</a>
            <button class="delete-btn">Excluir</button>
          </div>
        </div>
        <img src="img/armario.png" alt="Armario">
        <h3>Armário</h3>
        <span>Categoria: Sala</span>
          <br>
          <span>Rústico com portas ripadas</span>
          <br>
          <span>Medidas: 180 x 60 x 40</span>
          <br>
          <span>Fabricante: Alexandre de Almeida Nascimento</span>
          <br>
          <span>Preço: 1500,00</span>
          <p></p>
        <button class="btn">ativar</button>
      </div>

      <!-- Produto 2 -->
      <div class="product-card">
        <div class="menu">
          <span class="material-icons">more_vert</span>
          <div class="dropdown">
            <a href="{{ route('editarproduto') }}" title="Editar Produto">Editar</a>
            <button class="delete-btn">Excluir</button>
          </div>
        </div>
        <img src="img/mesa.png" alt="Mesa">
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
        <button class="btn desativar">desativar</button>
      </div>

<!-- Produto 3 -->
      <div class="product-card">
        <div class="menu">
          <span class="material-icons">more_vert</span>
          <div class="dropdown">
            <a href="EditarProduto.html" class="edit-link">Editar</a>
            <button class="delete-btn">Excluir</button>
          </div>
        </div>
        <img src="img/cristaleira.png" alt="Cristaleira">
        <h3>Cristaleira</h3>
       <span>Categoria: Cozinha</span>
              <br>
              <span>Móvel rústico vintage</span>
              <br>
              <span>Medidas: 180 x 60 x 45</span>
              <br>
              <span>Fabricante: Alexandre de Almeida Nascimento</span>
              <br>
              <span>Preço: 800,00</span>
              <p></p>
        <button class="btn">ativar</button>
      </div>

      <!-- Produto 4 -->
      <div class="product-card">
        <div class="menu">
          <span class="material-icons">more_vert</span>
          <div class="dropdown">
            <a href="EditarProduto.html" class="edit-link">Editar</a>
            <button class="delete-btn">Excluir</button>
          </div>
        </div>
        <img src="img/cadeira.png" alt="Cadeira">
        <h3>Cadeira</h3>
        <span>Categoria: Sala</span>
            <br>
            <span>Cadeira rústica e moderna</span>
            <br>
            <span>Medidas: 100 x 45</span>
            <br>
            <span>Fabricante: Alexandre de Almeida Nascimento</span>
            <br>
            <span>Preço: 199,00</span>
            <p></p>
        <button class="btn desativar">desativar</button>
      </div>

      <!-- Produto 5 -->
      <div class="product-card">
        <div class="menu">
          <span class="material-icons">more_vert</span>
          <div class="dropdown">
            <a href="EditarProduto.html" class="edit-link">Editar</a>
            <button class="delete-btn">Excluir</button>
          </div>
        </div>
        <img src="img/aparador.png" alt="Aparador">
        <h3>Aparador</h3>
        <span>Categoria: Sala</span>
                <br>
                <span>Rústico vintage e moderno</span>
                <br>
                <span>Medidas: 80 x 50 x 40</span>
                <br>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
                <br>
                <span>Preço: 500,00</span>
                <p></p>
        <button class="btn">ativar</button>
      </div>

      <!-- Card de adicionar -->
      <div class="product-card add-new">
        <span class="material-icons">add</span>
      </div>
    </div>
  </main>

  <!-- Rodapé -->
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
    // ================== ATIVAR / DESATIVAR ==================
    document.querySelectorAll('.product-card .btn').forEach(button => {
      button.addEventListener('click', () => {
        if(button.textContent.toLowerCase() === 'ativar'){
          button.textContent = 'desativar';
          button.classList.add('desativar');
          button.classList.remove('ativar');
        } else {
          button.textContent = 'ativar';
          button.classList.add('ativar');
          button.classList.remove('desativar');
        }
      });
    });

    // ================== MENU TRÊS PONTOS ==================
    document.querySelectorAll('.product-card .menu span').forEach(icon => {
      icon.addEventListener('click', (e) => {
        e.stopPropagation(); // evita fechar imediatamente
        const dropdown = icon.nextElementSibling;
        dropdown.classList.toggle('show');
      });
    });

    // FECHAR MENU AO CLICAR FORA
    document.addEventListener('click', () => {
      document.querySelectorAll('.product-card .dropdown').forEach(drop => {
        drop.classList.remove('show');
      });
    });

    // ================== BOTÃO + PARA CADASTRO ==================
    const addButton = document.querySelector('.product-card.add-new span');
    if(addButton){
      addButton.addEvena dos Santos<ntListener('click', () => {
        window.location.href = 'cadastrarproduto'; // link da tela de cadastro
      });
    }

    // ================== EXCLUIR PRODUTO ==================
    document.querySelectorAll(".delete-btn").forEach(button => {
      button.addEventListener("click", function() {
        const productCard = this.closest(".product-card");
        if (productCard) {
          productCard.remove();
          alert("Produto excluído!");
        }
      });
    });
  </script>
</body>
</html>
