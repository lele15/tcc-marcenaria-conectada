<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcenaria Conectada - Carrinho</title>

    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/carrinho.css') }}">
    <link rel="shortcut icon" href="/img/MR.png" type="image/x-icon">
</head>

<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="nav-content">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="/img/logo.png" alt="Marcenaria Conectada">
                </a>
            </div>
            <div class="nav-icons">
                <a href="{{ route('historico') }}" title="Histórico"><span class="material-icons">assignment</span></a>
                <a href="{{ route('favoritos') }}" title="Favoritos"><span class="material-icons">favorite</span></a>
                <a href="{{ route('visualizarcliente') }}" title="Perfil"><span class="material-icons">account_circle</span></a>
                <a href="{{ route('home') }}" title="Sair"><span class="material-icons">logout</span></a>
            </div>
        </div>
    </header>

    <!-- Carrinho -->
    <section class="cart-container">
        <h1>Carrinho de Compras</h1>

        @forelse ($itens as $item)
            <div class="produto" data-preco="{{ $item->preco }}">

                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nome }}">

                <div class="produto-info">
                    <strong>{{ $item->nome }}</strong>
                    <span>Categoria: {{ $item->categoria }}</span>
                    <p></p>
                    <span>Descrição: {{ $item->descricao }}</span>
                    <p></p>
                    <span>Medidas: {{ $item->altura }} x {{ $item->largura }} x {{ $item->profundidade }}</span>
                    <p></p>
                    <span>Fabricante: {{ $item->fabricante->name ?? 'Desconhecido' }}</span>
                </div>

                <div class="quantidade">
                    <button class="menos">-</button>
                    <span class="qtd">1</span>
                    <button class="mais">+</button>
                </div>

                <div class="subtotal">
                    R$ {{ number_format($item->preco, 2, ',', '.') }}
                </div>

                <form action="{{ route('carrinho.remover', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="remover-btn"><span class="material-icons">delete</span></button>
                </form>

            </div>
        @empty
            <p style="text-align:center; margin-top:20px; font-size:18px;">
                Seu carrinho está vazio. 🛒
            </p>
        @endforelse

        <!-- Resumo -->
        <div class="resumo">
            <h2>Resumo do Pedido</h2>
            <div class="itens-resumo"></div>
            <hr>
            <p class="total">
                <strong>Total</strong>
                <strong>R$ 0,00</strong>
            </p>

            <button class="whatsapp-btn" id="whatsappBtn">Pedir via WhatsApp</button>
            <button class="continuar-btn" onclick="window.location.href='/'">Continuar comprando</button>

            <form action="{{ route('carrinho.limpar') }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="limpar-btn">Limpar carrinho</button>
            </form>
        </div>
    </section>
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

    <!-- Script -->
    <script>
        window.addEventListener('DOMContentLoaded', () => {

            const itensResumo = document.querySelector('.itens-resumo');
            const totalResumo = document.querySelector('.resumo .total strong:last-child');

            function atualizarCarrinho() {
                let total = 0;
                itensResumo.innerHTML = '';

                const produtos = document.querySelectorAll('.produto');
                produtos.forEach(produto => {
                    if (!document.body.contains(produto)) return;

                    const nome = produto.querySelector('.produto-info strong').textContent;
                    const preco = parseFloat(produto.dataset.preco);
                    const quantidade = parseInt(produto.querySelector('.qtd').textContent);
                    const subtotal = preco * quantidade;

                    produto.querySelector('.subtotal').textContent =
                        `R$ ${subtotal.toLocaleString('pt-BR', { minimumFractionDigits: 2 })}`;

                    total += subtotal;

                    // adiciona ao resumo
                    const itemResumo = document.createElement('p');
                    itemResumo.innerHTML =
                        `<span>${nome} (${quantidade}x)</span><span>R$ ${subtotal.toLocaleString('pt-BR', {minimumFractionDigits:2})}</span>`;
                    itensResumo.appendChild(itemResumo);
                });

                totalResumo.textContent = `R$ ${total.toLocaleString('pt-BR', { minimumFractionDigits: 2 })}`;
            }

            // controles de quantidade
            const produtos = document.querySelectorAll('.produto');
            produtos.forEach(produto => {
                const btnMais = produto.querySelector('.mais');
                const btnMenos = produto.querySelector('.menos');
                const qtd = produto.querySelector('.qtd');

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
            });

            // botão WhatsApp
            document.getElementById('whatsappBtn').addEventListener('click', function(e) {
                e.preventDefault();

                const produtosAtuais = document.querySelectorAll('.produto');
                if (produtosAtuais.length === 0) {
                    alert('Seu carrinho está vazio!');
                    return;
                }

                let mensagem = 'Olá! Gostaria de pedir os seguintes produtos:\n';

                produtosAtuais.forEach(produto => {
                    const nome = produto.querySelector('.produto-info strong').textContent;
                    const qtd = produto.querySelector('.qtd').textContent;
                    //const img = produto.querySelector('img').src;
                    mensagem += `- ${nome} (x${qtd})\n`;
                });

                mensagem += `Total: ${totalResumo.textContent}`;

                const url = `https://wa.me/5541991822190?text=${encodeURIComponent(mensagem)}`;
                window.open(url, '_blank');
            });

            // inicia carrinho
            atualizarCarrinho();
        });
    </script>

</body>
</html>


