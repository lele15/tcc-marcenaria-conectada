<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcenaria Conectada</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/carrinho.css')}}">
    <link rel="shortcut icon" href="img/MR.png" type="image/x-icon">
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
          <a href="{{ route('carrinho') }}" title="Carrinho">
            <span class="material-icons">shopping_cart</span>
          </a>
          <a href="{{ route('favoritos') }}" title="Favoritos">
            <span class="material-icons">favorite</span>
          </a>
          <a href="{{ route('login') }}" title="Login">
            <span class="material-icons">login</span>
          </a>
          <a href="{{ route ('VisualizarCliente') }}" title="Perfil">
            <span class="material-icons">account_circle</span>
          </a>
      </div>
    </div>
  </header>

    <!-- Carrinho -->
    <section class="cart-container">
        <h1>Carrinho de Compras</h1>

        <!-- Produto 1 -->
        <div class="produto" data-preco="3500">
            <img src="img/aparador.png" alt="Aparador">
            <div class="produto-info">
                <strong>Aparador</strong>
                <span>Categoria: Sala</span>
                <p></p>
                <span>Descrição: Móvel rústico vintage e moderno</span>
                <p></p>
                <span>Medidas: 80 x 50 x 40</span>
                <p></p>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
            </div>
            <div class="quantidade">
                <button class="menos">-</button>
                <span class="qtd">1</span>
                <button class="mais">+</button>
            </div>
            <div class="subtotal">R$ 3.500,00</div>
            <button class="remover-btn"><span class="material-icons">delete</span></button>
        </div>

        <!-- Produto 2 -->
        <div class="produto" data-preco="3000">
            <img src="img/armario.png" alt="Armário">
            <div class="produto-info">
                <strong>Armário</strong>
                <span>Categoria: Cozinha</span>
                <p></p>
                <span>Descrição: Móvel rústico com portas ripadas</span>
                <p></p>
                <span>Medidas: 180 x 60 x 40</span>
                <p></p>
                <span>Fabricante: Alexandre de Almeida Nascimento</span>
            </div>
            <div class="quantidade">
                <button class="menos">-</button>
                <span class="qtd">1</span>
                <button class="mais">+</button>
            </div>
            <div class="subtotal">R$ 2.000,00</div>
            <button class="remover-btn"><span class="material-icons">delete</span></button>
        </div>

        <!-- Resumo do Pedido -->
        <div class="resumo">
            <h2>Resumo do Pedido</h2>
            <div class="itens-resumo"></div>
            <hr>
            <p class="total"><strong>Total</strong><strong>R$ 0,00</strong></p>
            <button class="whatsapp-btn" id="whatsappBtn">Pedir via Whatsapp</button>
            <button class="continuar-btn" onclick="window.location.href='home.html'">Continuar comprando</button>
            <button class="limpar-btn" id="limparCarrinho">Limpar carrinho</button>
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

    <!-- Script do Carrinho -->
    <script>
        const produtos = document.querySelectorAll('.produto');
        const itensResumo = document.querySelector('.itens-resumo');
        const totalResumo = document.querySelector('.resumo .total strong:last-child');

        function atualizarCarrinho() {
            let total = 0;
            itensResumo.innerHTML = '';

            produtos.forEach(produto => {
                if (!document.body.contains(produto)) return;

                const nome = produto.querySelector('.produto-info strong').textContent;
                const preco = parseFloat(produto.dataset.preco);
                const quantidade = parseInt(produto.querySelector('.qtd').textContent);
                const subtotal = preco * quantidade;

                produto.querySelector('.subtotal').textContent = `R$ ${subtotal.toLocaleString('pt-BR', {minimumFractionDigits: 2})}`;
                total += subtotal;

                // Adiciona no resumo
                const itemResumo = document.createElement('p');
                itemResumo.innerHTML = `<span>${nome} (${quantidade}x)</span><span>R$ ${subtotal.toLocaleString('pt-BR', {minimumFractionDigits: 2})}</span>`;
                itensResumo.appendChild(itemResumo);
            });

            totalResumo.textContent = `R$ ${total.toLocaleString('pt-BR', {minimumFractionDigits: 2})}`;
        }

        produtos.forEach(produto => {
            const btnMais = produto.querySelector('.mais');
            const btnMenos = produto.querySelector('.menos');
            const qtd = produto.querySelector('.qtd');
            const btnRemover = produto.querySelector('.remover-btn');

            btnMais.addEventListener('click', () => {
                qtd.textContent = parseInt(qtd.textContent) + 1;
                atualizarCarrinho();
            });

            btnMenos.addEventListener('click', () => {
                if (parseInt(qtd.textContent) > 1) {
                    qtd.textContent = parseInt(qtd.textContent) - 1;
                    atualizarCarrinho();
                }
            });

            btnRemover.addEventListener('click', () => {
                produto.remove();
                atualizarCarrinho();
            });
        });

        // Limpar carrinho
        document.getElementById('limparCarrinho').addEventListener('click', () => {
            produtos.forEach(p => p.remove());
            atualizarCarrinho();
        });

        // Pedir via WhatsApp
        document.getElementById('whatsappBtn').addEventListener('click', () => {
            let mensagem = 'Olá! Gostaria de pedir os seguintes produtos:\n';
            produtos.forEach(produto => {
                const nome = produto.querySelector('.produto-info strong').textContent;
                const qtd = produto.querySelector('.qtd').textContent;
                mensagem += `- ${nome} (x${qtd})\n`;
            });
            mensagem += `Total: ${totalResumo.textContent}`;
            const url = `https://wa.me/5541992772292?text=${encodeURIComponent(mensagem)}`;
            window.open(url, '_blank');
        });

        // Inicializa carrinho
        window.addEventListener('load', atualizarCarrinho);
    </script>
</body>
</html>
