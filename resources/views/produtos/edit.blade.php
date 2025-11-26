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
                    <!-- <img src="storage/app/logo/logo.png" alt="Marcenaria Conectada">-->
                    <img src="{{ asset('img/logo.png') }}" alt="Marcenaria Conectada">
                </a>
            </div>

                <div class="nav-icons">
                    <a href=""title="Histórico">
                        <span class="material-icons">assignment</span>
                    </a>
                    <a href="" title="Painel do Fabricante">
                        <span class="material-icons">grid_view</span>
                    </a>
                    <a href="" title="Perfil do Fabricante">
                        <span class="material-icons">account_circle</span>
                    </a>
                </div>
            </div>
        </header>

        <!-- Formulário de Edição -->
        <section class="cadastro">
            <h2>Editar Produto</h2>
            <form action="{{route('produtos.update', $produto->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Categoria e Nome do Produto -->
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="quarto" @if($produto->categoria == "QUARTO") selected @endif>Quarto</option>
                    <option value="cozinha" @if($produto->categoria == "COZINHA") selected @endif>Cozinha</option>
                    <option value="sala" @if($produto->categoria == "SALA") selected @endif>Sala</option>
                    <option value="banheiro" @if($produto->categoria == "BANHEIRO") selected @endif>Banheiro</option>
                </select>

                <div id="div-produto" style="display: none;">
                    <label for="nome-produto">Nome do produto:</label>
                    <select id="nome-produto" name="nome" required>
                        <option value="">Selecione a categoria primeiro</option>
                    </select>
                </div>

                <!-- Descrição -->
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="3">{{$produto->descricao}}</textarea>

                <!-- Bloco de Medidas -->
                <div id="medidas-container" style="display:none; margin-top:10px;">
                    <h4>Medidas do móvel</h4>
                    <div class="inputs-medidas">
                        <div>
                            <label for="altura">Altura (cm)</label>
                            <input type="number" value="{{$produto->altura}}" id="altura" name="altura" placeholder="Ex: 180">
                        </div>
                    <div>
                    <label for="largura">Largura (cm)</label>
                    <input type="number" value="{{$produto->largura}}" id="largura" name="largura" placeholder="Ex: 120">
                    </div>
                        <div id="campo-profundidade">
                            <label for="profundidade">Profundidade (cm)</label>
                            <input type="number" value="{{$produto->profundidade}}" id="profundidade" name="profundidade" placeholder="Ex: 60">
                        </div>
                    </div>
                </div>

                <!-- Preço -->
                <label for="preco">Preço:</label>
                <input type="number" value="{{$produto->preco}}" id="preco" name="preco" step="0.01">
                <!-- Upload da Foto -->
                <label for="foto" class="file-label">Foto:</label>
                <input type="file" id="foto" name="foto" accept="image/*">
                <!-- Botões -->
                <div class="form-buttons">
                    <a href="{{route('produtos.index')}}" class="btn-cancelar" style="text-decoration: none;">Cancelar</a>
                    <button type="submit" class="btn-salvar">Salvar</button>
                </div>
            </form>
        </section>



<script>
document.addEventListener("DOMContentLoaded", function () {

    const produtosPorCategoria = {
        "quarto": ["Guarda-roupa", "Cômoda", "Criado-mudo", "Penteadeira", "Cabeceira", "Sapateira", "Nicho"],
        "cozinha": ["Armário", "Balcão", "Gabinete de pia", "Bancada", "Cristaleira", "Mesa", "Cadeira"],
        "sala": ["Rack", "Painel de TV", "Estante", "Aparador"],
        "banheiro": ["Gabinete de banheiro", "Nicho de parede", "Prateleira"]
    };

    const movelTemProfundidade = [
        "guarda-roupa","cômoda","criado-mudo","penteadeira","sapateira",
        "nicho","rack","estante","aparador","cadeira","cristaleira",
        "armário","balcão","gabinete-de-pia","bancada","escrivaninha",
        "gabinete-de-banheiro","nicho-de-parede"
    ];

    const categoriaSelect = document.getElementById("categoria");
    const nomeProdutoSelect = document.getElementById("nome-produto");
    const divProduto = document.getElementById("div-produto");
    const medidasContainer = document.getElementById("medidas-container");
    const campoProfundidade = document.getElementById("campo-profundidade");

    // Nome atual do produto vindo do banco (em lowercase e com hífens)
    const nomeAtual = "{{$produto->nome}}".toLowerCase().replace(/\s+/g, "-");

    // Função que popula o select
    function carregarProdutos() {
        const categoria = categoriaSelect.value.toLowerCase();

        if (!categoria || !produtosPorCategoria[categoria]) {
            nomeProdutoSelect.innerHTML = "<option value=''>Selecione...</option>";
            divProduto.style.display = "none";
            return;
        }

        divProduto.style.display = "block";
        nomeProdutoSelect.innerHTML = "<option value=''>Selecione...</option>";

        produtosPorCategoria[categoria].forEach(produto => {
            const value = produto.toLowerCase().replace(/\s+/g, "-");
            const option = document.createElement("option");

            option.value = value;
            option.textContent = produto;

            // Seleciona automaticamente o nome atual vindo do BD
            if (value === nomeAtual) {
                option.selected = true;
            }

            nomeProdutoSelect.appendChild(option);
        });

        // Mostrar medidas
        medidasContainer.style.display = "block";

        // Configura profundidade automaticamente
        if (movelTemProfundidade.includes(nomeProdutoSelect.value)) {
            campoProfundidade.style.display = "block";
        } else {
            campoProfundidade.style.display = "none";
        }
    }

    // Quando trocar categoria → carrega produtos
    categoriaSelect.addEventListener("change", carregarProdutos);

    // Quando trocar nome do produto → altera profundidade
    nomeProdutoSelect.addEventListener("change", function() {
        if (movelTemProfundidade.includes(this.value)) {
            campoProfundidade.style.display = "block";
        } else {
            campoProfundidade.style.display = "none";
        }
    });

    // CARREGAR TUDO NA ABERTURA DA PÁGINA
    carregarProdutos();
});
</script>

    </body>
</html>
