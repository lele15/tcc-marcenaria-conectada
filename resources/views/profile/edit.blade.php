<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcenaria Conectada</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="/img/MR.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/EditarPerfil.css') }}">
</head>

<body>

    <!-- NAVBAR -->
    <header class="navbar">
        <div class="nav-content">

            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="/img/logo.png" alt="Marcenaria Conectada">
                </a>
            </div>

            <div class="nav-icons">
                <a href="{{ route('historico') }}">
                    <span class="material-icons">assignment</span>
                </a>

                {{-- <a href="{{ route('carrinho.index') }}">
        <span class="material-icons">shopping_cart</span>
      </a> --}}

                {{-- <a href="{{ route('favoritos.index') }}">
        <span class="material-icons">favorite</span>
      </a> --}}

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


    <!-- SEÇÃO EDITAR PERFIL -->
    <section class="cadastro">
        <h2>Editar Perfil</h2>

        <form method="post" action="{{ route('profile.edit') }}">
            @csrf
            @method('patch')

            <label for="name">Nome Completo:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>

            <label for="current_password">Senha Atual:</label>
            <div class="senha-container">
                <input type="password" id="current_password" name="current_password">
                <span class="material-icons toggle-senha"
                    onclick="toggleSenha('current_password', this)">visibility</span>
            </div>

            <label for="password">Nova Senha:</label>
            <div class="senha-container">
                <input type="password" id="password" name="password">
                <span class="material-icons toggle-senha"
                    onclick="toggleSenha('password', this)">visibility</span>
            </div>

            <label for="password_confirmation">Confirmar nova senha:</label>
            <div class="senha-container">
                <input type="password" id="password_confirmation" name="password_confirmation">
                <span class="material-icons toggle-senha"
                    onclick="toggleSenha('password_confirmation', this)">visibility</span>
            </div>

            <div class="btn-group">

            <button type="submit" class="salvar">
                <a href="{{route('profile.edit')}}" class="salvar" style="text-decoration: none;"></a>
            Salvar Alterações</button>
            </div>

        </form>
    </section>

    <!-- FOOTER -->
    <div class="footer">
        <h3>Redes Sociais</h3>
        <div class="social-icons">
            <a href="https://instagram.com/ale_moveis_rusticos" target="_blank">
                <img src="/img/insta.png" alt="Instagram">
            </a>

            <a href="https://wa.me/5541991822190" target="_blank">
                <img src="/img/whats.png" alt="WhatsApp">
            </a>

            <a href="mailto:alexandrealmeidanascimento@gmail.com">
                <img src="/img/email.png" alt="Email">
            </a>
        </div>

        <p>
            Horário de atendimento:<br>
            segunda à sexta<br>
            das 8h às 18h
        </p>
    </div>

    <script>
        function toggleSenha(idCampo, icone) {
            const campo = document.getElementById(idCampo);
            if (campo.type === "password") {
                campo.type = "text";
                icone.textContent = "visibility_off";
            } else {
                campo.type = "password";
                icone.textContent = "visibility";
            }
        }
    </script>

</body>

</html>
