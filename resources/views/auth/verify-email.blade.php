<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de E-mail</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/MR.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- Usa o mesmo CSS do login (que já tem card, botões, fontes, etc) -->
</head>
<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="nav-content">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo">
                </a>
            </div>
        </div>
    </header>

    <section class="login">
        <h2>Verificação de E-mail</h2>

        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <p style="text-align:center; margin-bottom:15px; color:#333;">
                Obrigado por se cadastrar!<br>
                Para continuar, confirme seu e-mail clicando no link que enviamos.
            </p>

            @if (session('status') == 'verification-link-sent')
                <p style="color:green; text-align:center; font-weight:bold;">
                    Um novo link de verificação foi enviado!
                </p>
            @endif

            <button type="submit" class="btn-login" style="margin-top:10px;">
                Reenviar e-mail de verificação
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" style="margin-top:15px;">
            @csrf
            <button class="btn-login" style="background:#b64848;">
                Sair da conta
            </button>
        </form>
    </section>

    <!-- Rodapé -->
    <div class="footer">
        <h3>Redes Sociais</h3>
        <div class="social-icons">
            <a href="https://instagram.com/ale_moveis_rusticos" target="_blank">
                <img src="{{ asset('img/insta.png') }}" alt="Instagram">
            </a>
            <a href="https://wa.me/5541992772292" target="_blank">
                <img src="{{ asset('img/whats.png') }}" alt="WhatsApp">
            </a>
            <a href="mailto:alexandrealmeidanascimento@gmail.com">
                <img src="{{ asset('img/email.png') }}" alt="Email">
            </a>
        </div>
        <p>
            Horário de atendimento:<br>
            segunda à sexta<br>
            das 8h às 18h
        </p>
    </div>

</body>
</html>
