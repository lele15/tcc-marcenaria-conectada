<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marcenaria Conectada</title>
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
  <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
  <link rel="stylesheet" href="{{asset('css/Produto.css') }}">
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
                <a href="{{ route('historicofabricante') }}" title="Histórico">
                    <span class="material-icons">assignment</span>
                </a>
                <a href="{{ route ('PainelFabricante')}}" title="Painel do Fabricante">
                    <span class="material-icons">grid_view</span>
                </a>
                <a href="{{ route('visualizarfabricante') }}" title="Perfil do Fabricante">
                    <span class="material-icons">account_circle</span>
                </a>
            </div>
        </div>
    </header>

 <!-- Formulário de Edição -->
    <section class="cadastro">
        <h2>Editar Produto</h2>
        <form action="#" method="post">

            <!-- Categoria e Nome do Produto -->
            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria" required>
                <option value="sala">Sala</option>
                <option value="quarto">Quarto</option>
                <option value="cozinha">Cozinha</option>
                <option value="banheiro">Banheiro</option>
            </select>

            <label for="nome">Nome do produto:</label>
            <input type="text" id="nome" name="nome" value="Aparador" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="3">Móvel rústico vintage e moderno.</textarea>

            <div id="medidas-container" style="display:none; margin-top:10px;">
                    <h4>Medidas do móvel</h4>
                    <div class="inputs-medidas">
                    <div>
                        <label for="altura">Altura (cm)</label>
                        <input type="number" id="altura" name="altura" value="80">
                    </div>
                    <div>
                        <label for="largura">Largura (cm)</label>
                        <input type="number" id="largura" name="largura" value="50">
                    </div>
                    <div id="campo-profundidade">
                        <label for="profundidade">Profundidade (cm)</label>
                        <input type="number" id="profundidade" name="profundidade" value="40">
                    </div>
                    </div>
                </div>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" value="599.90">


            <!-- Upload da Foto -->
            <label for="foto" class="file-label">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*">

            <!-- Botões -->
          <div class="btn-group">
              <button type="button" class="btn-cancelar-editar">Cancelar</button>
              <button type="submit" class="btn-salvar-editar">Salvar Alterações</button>
          </div>
        </form>
    </section>

<div class="footer">
                <h3>Redes Sociais</h3>
                <div class="social-icons">
                    <a href="https://instagram.com/ale.snsc" target="_blank">
                    <img src="img/insta.png" alt="Instagram">
                    </a>
                    <a href="https://wa.me/5541992772292" target="_blank">
                    <img src="img/whats.png" alt="WhatsApp">
                    </a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=alessandrasilvanascimento1501@gmail.com" target="_blank">
                    <img src="img/email.png" alt="Email">
                    </a>

                </div>
                <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
            </div>


    <script>
document.addEventListener('DOMContentLoaded', () => {
    const categoriaSelect = document.getElementById('categoria');
    const medidasContainer = document.getElementById('medidas-container');
    const profundidadeDiv = document.getElementById('campo-profundidade');

    // Função para mostrar ou ocultar medidas
    function toggleMedidas() {
        const categoria = categoriaSelect.value;

        // Exemplo: apenas quarto e sala têm profundidade
        if(categoria === 'quarto' || categoria === 'sala') {
            medidasContainer.style.display = 'flex';
            profundidadeDiv.style.display = 'flex';
        } else if(categoria === 'cozinha' || categoria === 'banheiro') {
            medidasContainer.style.display = 'flex';
            profundidadeDiv.style.display = 'none';
        } else {
            medidasContainer.style.display = 'none';
        }
    }

    // Inicializa na carga da página
    toggleMedidas();

    // Atualiza quando a categoria mudar
    categoriaSelect.addEventListener('change', toggleMedidas);

    // Botão cancelar: limpa campos ou volta para a página anterior
    const btnCancelar = document.querySelector('.cancelar');
    btnCancelar.addEventListener('click', () => {
        // Exemplo: voltar para página anterior
        window.history.back();
    });

    // Optional: validação simples antes de enviar
    const form = document.querySelector('form');
    form.addEventListener('submit', (e) => {
        const nome = document.getElementById('nome').value.trim();
        const preco = document.getElementById('preco').value;

        if(nome === '' || preco <= 0) {
            e.preventDefault();
            alert('Por favor, preencha todos os campos obrigatórios corretamente!');
        }
    });
});
</script>

</body>
</html>
