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
<body class="fabricante">

<!-- Navbar -->
<header class="navbar">
  <div class="nav-content">
    <div class="logo">
      <a href="{{ route ('home')}}" title="Home">
        <img src="img/logo.png" alt="Marcenaria Conectada">
      </a>
    </div>
    <div class="nav-icons">
        <a href="{{ route ('cadastroproduto')}}" title="Cadastrar Produto">
            <span class="material-icons">add</span>
          </a>
          <a href="{{ route ('painelfabricante')}}" title="Painel do Fabricante">
            <span class="material-icons">grid_view</span>
          </a>
        <a href="{{ route ('visualizarfabricante') }}" title="Perfil">
            <span class="material-icons">account_circle</span>
        </a>
    </div>
  </div>
</header>

<!-- Conteúdo Histórico -->
<section class="historico">
  <h1>Pedidos Recebidos</h1>

  <!-- Pedido 1 -->
  <div class="pedido">
    <img src="img/cristaleira.png" alt="Cristaleira">
    <div class="pedido-info">
      <h3>Cristaleira</h3>
      <p>Cliente: Maria Silva</p>
      <p>Data do pedido: 12/10/2025</p>
      <p>Móvel rústico vintage</p>
      <p>Preço: R$ 3.500,00</p>
      <p>Categoria: Cozinha</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>

      <button class="status enviado popup-btn">Enviado</button>

      <!-- Popup -->
      <div class="popup-menu">
        <button class="popup-item">Em negociação</button>
        <button class="popup-item">Visualizado</button>
        <button class="popup-item">Enviado</button>
        <button class="popup-item">Concluído</button>
        <button class="popup-item cancelado">Cancelado</button>
      </div>
    </div>
  </div>

  <!-- Pedido 2 -->
  <div class="pedido">
    <img src="img/aparador.png" alt="Aparador">
    <div class="pedido-info">
      <h3>Aparador</h3>
      <p>Cliente: João Oliveira</p>
      <p>Data do pedido: 20/09/2025</p>
      <p>Rústico vintage e moderno</p>
      <p>Preço: R$ 3.000,00</p>
      <p>Categoria: Sala</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>

      <button class="status visualizado popup-btn">Visualizado</button>

      <!-- Popup -->
      <div class="popup-menu">
        <button class="popup-item">Em negociação</button>
        <button class="popup-item">Visualizado</button>
        <button class="popup-item">Enviado</button>
        <button class="popup-item">Concluído</button>
        <button class="popup-item cancelado">Cancelado</button>
      </div>
    </div>
  </div>

  <!-- Pedido 3 -->
  <div class="pedido">
    <img src="img/guardaroupa.png" alt="Guarda Roupa">
    <div class="pedido-info">
      <h3>mesa</h3>
      <p>Cliente: José Santos</p>
      <p>Data do pedido: 17/09/2025</p>
      <p>Móvel rústico e delicado</p>
      <p>Preço: R$ 4.500,00</p>
      <p>Categoria: Quarto</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>

      <button class="status visualizado popup-btn">Visualizado</button>

      <!-- Popup -->
      <div class="popup-menu">
        <button class="popup-item">Em negociação</button>
        <button class="popup-item">Visualizado</button>
        <button class="popup-item">Enviado</button>
        <button class="popup-item">Concluído</button>
        <button class="popup-item cancelado">Cancelado</button>
      </div>
    </div>
  </div>

   <!-- Pedido 3 -->
  <div class="pedido">
    <img src="img/armario.png" alt="Armario">
    <div class="pedido-info">
      <h3>Armario</h3>
      <p>Cliente: Pedro Alvares</p>
      <p>Data do pedido: 10/03/2025</p>
      <p>Rústico com portas ripadas</p>
      <p>Preço: R$ 1.500,00</p>
      <p>Categoria: Sala</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>

      <button class="status visualizado popup-btn">Visualizado</button>

      <!-- Popup -->
      <div class="popup-menu">
        <button class="popup-item">Em negociação</button>
        <button class="popup-item">Visualizado</button>
        <button class="popup-item">Enviado</button>
        <button class="popup-item">Concluído</button>
        <button class="popup-item cancelado">Cancelado</button>
      </div>
    </div>
  </div>

  <!-- Pedido 4 -->
  <div class="pedido">
    <img src="img/cadeira.png" alt="Cadeira">
    <div class="pedido-info">
      <h3>Cadeira</h3>
      <p>Cliente: Eliza Carvalho </p>
      <p>Data do pedido: 30/11/2025</p>
      <p>Cadeira rústica e moderna</p>
      <p>Preço: R$ 199,00</p>
      <p>Categoria: Cozinha</p>
    </div>
    <div class="pedido-status">
      <p>Status:</p>

      <button class="status visualizado popup-btn">Visualizado</button>

      <!-- Popup -->
      <div class="popup-menu">
        <button class="popup-item">Em negociação</button>
        <button class="popup-item">Visualizado</button>
        <button class="popup-item">Enviado</button>
        <button class="popup-item">Concluído</button>
        <button class="popup-item cancelado">Cancelado</button>
      </div>
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

<!--Script-->
<script>
document.addEventListener("DOMContentLoaded", () => {

  const statusButtons = document.querySelectorAll(".popup-btn");

  statusButtons.forEach(btn => {
    btn.addEventListener("click", (e) => {
      e.stopPropagation();

      // fecha outros popups antes de abrir o clicado
      document.querySelectorAll(".popup-menu").forEach(p => p.style.display = "none");

      const popup = btn.nextElementSibling;
      popup.style.display = (popup.style.display === "flex") ? "none" : "flex";
    });
  });

  // quando clica em uma opção dentro do popup
  const popupItems = document.querySelectorAll(".popup-item");

  popupItems.forEach(item => {
    item.addEventListener("click", (e) => {
      const selectedStatus = e.target.innerText;
      const popupMenu = e.target.parentElement;
      const statusBtn = popupMenu.previousElementSibling;

      // remove todas as classes antigas
      statusBtn.classList.remove("enviado", "visualizado", "negociacao", "cancelado", "concluido");

      // adiciona nova classe conforme o texto
      if (selectedStatus === "Em negociação") {
        statusBtn.classList.add("negociacao");
      } else if (selectedStatus === "Visualizado") {
        statusBtn.classList.add("visualizado");
      } else if (selectedStatus === "Enviado") {
        statusBtn.classList.add("enviado");
      } else if (selectedStatus === "Concluído") {
        statusBtn.classList.add("concluido");
      } else if (selectedStatus === "Cancelado") {
        statusBtn.classList.add("cancelado");
      }

      // troca o texto do botão
      statusBtn.innerText = selectedStatus;

      // fecha popup
      popupMenu.style.display = "none";
    });
  });

  // fecha popup ao clicar fora
  document.addEventListener("click", () => {
    document.querySelectorAll(".popup-menu").forEach(p => p.style.display = "none");
  });

});
</script>
