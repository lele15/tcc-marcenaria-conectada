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
                <a href="{{ route('historico') }}" title="Histórico">
                    <span class="material-icons">assignment</span>
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

            <label for="nome">Nome do produto:</label>
            <input type="text" id="nome" name="nome" value="Cama de Casal de Madeira" required>

            <label for="descricao">Descrição:</label>
            <textarea id="descricao" name="descricao" rows="3">Cama de casal feita em madeira maciça, com design rústico e acabamento envernizado.</textarea>

            <label for="categoria">Categoria:</label>
            <select id="categoria" name="categoria">
                <option value="">Selecione...</option>
                <optgroup label="Ambientes">
                    <option value="quarto" selected>Quarto</option>
                    <option value="sala-estar">Sala de Estar</option>
                    <option value="cozinha">Cozinha</option>
                    <option value="banheiro">Banheiro</option>
                    <option value="area-externa">Área Externa</option>
                    <option value="escritorio">Escritório</option>
                </optgroup>
                <optgroup label="Tipos de móveis">
                    <option value="cama" selected>Cama</option>
                    <option value="mesa">Mesa</option>
                    <option value="sofa">Sofá</option>
                    <option value="armario">Armário</option>
                    <option value="rack">Rack / Painel de TV</option>
                    <option value="prateleira">Prateleira</option>
                </optgroup>
                <optgroup label="Outros">
                    <option value="infantil">Infantil</option>
                    <option value="pet">Pet</option>
                    <option value="multiuso">Multiuso</option>
                    <option value="decoração">Decoração</option>
                    <option value="outro">Outro</option>
                </optgroup>
            </select>

            <label for="preco">Preço:</label>
            <input type="number" id="preco" name="preco" step="0.01" value="1299.90">

            <!-- Upload da Foto -->
            <label for="foto" class="file-label">Foto:</label>
            <input type="file" id="foto" name="foto" accept="image/*">

            <!-- Botões -->
          <div class="btn-group">
              <button type="button" class="cancelar">Cancelar</button>
              <button type="submit" class="salvar">Salvar Alterações</button>
          </div>
        </form>
    </section>

    <!-- Rodapé -->
    <div class="footer">
        <h3>Redes Sociais</h3>
        <div class="social-icons">
            <a href="https://instagram.com" target="_blank">
                <img src="img/insta.png" alt="Instagram">
            </a>
            <a href="https://wa.me/5500000000000" target="_blank">
                <img src="img/whats.png" alt="WhatsApp">
            </a>
            <a href="mailto:contato@exemplo.com">
                <img src="img/email.png" alt="Email">
            </a>
        </div>
        <p>Horário de atendimento:<br>segunda à sexta<br>das 8h às 18h</p>
    </div>
</body>
</html>
