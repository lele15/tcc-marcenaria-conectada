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

            <!-- Formulário de Cadastro -->
        <section class="cadastro">
            <h2>Cadastrar Produto</h2>
            <form action="{{route('produtos.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Categoria e Nome do Produto -->
                <label for="categoria">Categoria:</label>
                <select id="categoria" name="categoria" required>
                    <option value="">Selecione...</option>
                    <option value="quarto">Quarto</option>
                    <option value="cozinha">Cozinha</option>
                    <option value="sala">Sala</option>
                    <option value="banheiro">Banheiro</option>
                </select>

                <label for="nome-produto">Nome do produto:</label>
                <select id="nome-produto" name="nome" required>
                    <option value="">Selecione a categoria primeiro</option>
                </select>


                <!-- Descrição -->
                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="3"></textarea>

                <!-- Bloco de Medidas -->
                <div id="medidas-container" style="display:none; margin-top:10px;">
                    <h4>Medidas do móvel</h4>
                    <div class="inputs-medidas">
                        <div>
                            <label for="altura">Altura (cm)</label>
                            <input type="number" id="altura" name="altura" placeholder="Ex: 180">
                        </div>
                    <div>
                    <label for="largura">Largura (cm)</label>
                    <input type="number" id="largura" name="largura" placeholder="Ex: 120">
                    </div>
                        <div id="campo-profundidade">
                            <label for="profundidade">Profundidade (cm)</label>
                            <input type="number" id="profundidade" name="profundidade" placeholder="Ex: 60">
                        </div>
                    </div>
                </div>

                <!-- Preço -->
                <label for="preco">Preço:</label>
                <input type="number" id="preco" name="preco" step="0.01">

               {{--<label for="fabricante_id">Fabricante:</label>
                <select id="fabricante_id" name="fabricante_id" required>
                    @foreach($fabricantes as $fab)
                        <option value="{{ $fab->id }}">{{ $fab->nome }}</option>
                    @endforeach
                </select>--}}

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
            const produtosPorCategoria = {
            "quarto": ["Guarda-roupa", "Cômoda", "Criado-mudo", "Penteadeira", "Cabeceira", "Sapateira", "Nicho"],
            "cozinha": ["Armário", "Balcão", "Gabinete de pia", "Bancada", "Cristaleira", "Mesa", "Cadeira"],
            "sala": ["Rack", "Painel de TV", "Estante", "Aparador"],
            "banheiro": ["Gabinete de banheiro", "Nicho de parede", "Prateleira"]
            };

            const categoriaSelect = document.getElementById("categoria");
            const nomeProdutoSelect = document.getElementById("nome-produto");
            const medidasContainer = document.getElementById("medidas-container");
            const campoProfundidade = document.getElementById("campo-profundidade");

            const movelTemProfundidade = [
            "guarda-roupa","cômoda","criado mudo","penteadeira","sapateira",
            "nicho","rack","estante","aparador","cadeira","cristaleira",
            "armário","balcão","gabinete de pia","bancada","escrivaninha",
            "gabinete de banheiro","nicho de parede","prateleira"
            ];

            // Popula select de produtos conforme categoria
            categoriaSelect.addEventListener("change", function () {
            const categoria = this.value;
            nomeProdutoSelect.innerHTML = '<option value="">Selecione...</option>';

            if (categoria && produtosPorCategoria[categoria]) {
                produtosPorCategoria[categoria].forEach(produto => {
                const option = document.createElement("option");
                option.value = produto.toLowerCase().replace(/\s+/g, "-");
                option.textContent = produto;
                nomeProdutoSelect.appendChild(option);
                });
                nomeProdutoSelect.style.display = "inline-block";
            } else {
                nomeProdutoSelect.style.display = "none";
            }

            medidasContainer.style.display = "block";
            campoProfundidade.style.display = "none"; // espera seleção do produto
            });

            // Atualiza profundidade quando um produto é selecionado
            nomeProdutoSelect.addEventListener("change", function() {
            const produto = this.value;
            if (movelTemProfundidade.includes(produto)) {
                campoProfundidade.style.display = "block";
            } else {
                campoProfundidade.style.display = "none";
            }
            });
        </script>
    </body>
</html>
