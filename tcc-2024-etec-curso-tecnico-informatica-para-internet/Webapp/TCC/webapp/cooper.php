<?php
session_start();
if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1) {
    echo "<script>
    alert('Acesso negado! Realize o login antes de acessar a página.');
    window.location.href = '../index.html';
  </script>";
  exit;
} else {
    $nm_usuario = isset($_SESSION['nm_usuario']) ? $_SESSION['nm_usuario'] : 'Usuário';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="img/logo.png" type="image/png">
    <link rel="stylesheet" href="css/cooper.css">
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>
    <title>Coopersol</title>
</head>
<body>

<header id="user">
    <a href="usuario.php">
        <i class="fa-solid fa-circle-user fa-3x" style="color: #ffffff;"></i>
    </a>
</header>

<main class="conteudo">
    <section>
        <h1 id="titulo">Reciclagem</h1>
        <p>
            A reciclagem é o processo de reaproveitamento de materiais descartados,
            reintroduzindo-os na cadeia produtiva para gerar valor e ser
            reutilizados. É eficiente para tratar resíduos sólidos, preservar
            recursos naturais e está ligada à economia circular.
        </p>
    </section>

    <div class="video-card">
        <div class="video-card-content">
            <iframe
                width="100%"
                height="315"
                src="https://www.youtube.com/embed/ITur0JNJZos?si=LbNOj9dI9_i0Vti5"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
            ></iframe>
        </div>
    </div>

    <section>
        <h1>Cooperativa CooperSol</h1>
        <p>
            A cooperativa Coopersol trabalha com a coleta de lixo reciclável em
            domicílio, visando reduzir a quantidade de resíduos nos aterros
            sanitários e promover um destino mais sustentável para esses materiais,
            evitando danos ao meio ambiente.
        </p>
    </section>

    <article class="mvv" style="border-radius: 8px;">
        <div class="card-header">
            <h2 class="card-title">Missão</h2>
        </div>
        <div class="card-content">
            <p>
                Promover a coleta seletiva em Itanhaém, conscientizando a população sobre práticas sustentáveis, gerando renda para os cooperados e preservando o meio ambiente.
            </p>
        </div>
    </article>

    <article class="mvv" style="border-radius: 8px;">
        <div class="card-header">
            <h2 class="card-title">Visão</h2>
        </div>
        <div class="card-content">
            <p>
                Ser referência em gestão de resíduos sólidos e coleta seletiva, servindo de exemplo para outras cidades em proteção ambiental e inclusão social.
            </p>
        </div>
    </article>

    <article class="mvv" style="border-radius: 8px;">
        <div class="card-header">
            <h2 class="card-title">Valor</h2>
        </div>
        <div class="card-content">
            <p>
                A CooperSol promove sustentabilidade, inclusão social, responsabilidade, colaboração, educação, transparência.
            </p>
        </div>
    </article>

    <div class="pontos-coleta">
        <a href="#" id="whatsapp-link">
            <button>Fale Conosco</button>
        </a>
    </div>
    
</main>

<footer>
    <div class="tab-bar">
        <div class="tab-button" id="home">
            <a href="home.php">
                <div class="icon"><i class="fa-solid fa-house fa-xs" style="color: #f5f1c8;"></i></div>
            </a>
            <div class="label">HOME</div>
        </div>

        <div class="tab-button" id="ecopontos">
            <a href="ecopontos/ecopontos.php">
                <div class="icon"><i class="fa-solid fa-leaf fa-xs" style="color: #f5f1c8;"></i></div>
            </a>
            <div class="label">ECOPONTOS</div>
        </div>

        <div class="tab-button" id="cooperativa">
            <a href="cooper.php">
                <div class="icon"><i class="fa-solid fa-circle-info fa-sm" style="color: #f5f1c8;"></i></div>
            </a>
            <div class="label">COOPERATIVA</div>
        </div>

        <div class="tab-button" id="diy">
            <a href="diy.php">
            <div class="icon"><i class="fa-solid fa-paper-plane fa-xs" style="color: #f5f1c8;"></i></div>
            </a>   
            <div class="label">DIY</div>
        </div>
    </div>
</footer>

<script>
    document.getElementById('whatsapp-link').addEventListener('click', function() {
        const now = new Date();
        let greeting;

        if (now.getHours() < 12) {
            greeting = "bom dia!";
        } else if (now.getHours() < 18) {
            greeting = "boa tarde!";
        } else {
            greeting = "boa noite!";
        }

        const message = encodeURIComponent(`Olá, ${greeting}`);
        const whatsappNumber = '5511999999999'; // Número do WhatsApp
        const whatsappLink = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=${message}`;

        window.open(whatsappLink, '_blank');
    });
</script>
</body>
</html>
