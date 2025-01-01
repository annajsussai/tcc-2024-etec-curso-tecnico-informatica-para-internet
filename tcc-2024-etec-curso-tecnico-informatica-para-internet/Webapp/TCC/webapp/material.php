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
    <link rel="stylesheet" href="css/material.css"> 
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>
    <title>Materiais para Reciclagem</title>
</head>

<body>
    <header id="user">
        <a href="usuario.php">
            <i class="fa-solid fa-circle-user fa-3x" style="color: #ffffff;"></i>
        </a>
    </header>

    <main class="conteudo">
        <section id="instrucao">
            <h2 id="titulo"><strong>Materiais</strong></h2>
            <p>
                Está com dúvida de como armazenar os materiais em sua casa? Siga essas
                instruções:
            </p>
        </section>

        <article class="card">
            <header class="card-header">
                <h3>Papel</h3>
            </header>
            <div class="card-content">
                <p>
                    O papel deve ser armazenado em local seco e longe de umidade para
                    evitar mofo. Dobre ou amasse os papéis antes de armazenar para ocupar
                    menos espaço. Evite misturar com outros materiais.
                </p>
            </div>
        </article>

        <article class="card">
            <header class="card-header">
                <h3>Vidro</h3>
            </header>
            <div class="card-content">
                <p>
                    Os vidros devem ser limpos e armazenados em caixas ou sacolas
                    resistentes para evitar que quebrem. Não misture vidros quebrados com
                    outros recicláveis; armazene-os separadamente em um recipiente seguro.
                </p>
            </div>
        </article>

        <article class="card">
            <header class="card-header">
                <h3>Papelão</h3>
            </header>
            <div class="card-content">
                <p>
                    O papelão deve ser desmontado e empilhado para economizar espaço.
                    Armazene-o em local seco para evitar que absorva umidade e se
                    deteriore.
                </p>
            </div>
        </article>

        <article class="card">
            <header class="card-header">
                <h3>Metal</h3>
            </header>
            <div class="card-content">
                <p>
                    Metais, como latas, devem ser lavados antes de serem armazenados.
                    Amassar as latas pode ajudar a economizar espaço. Armazene os metais
                    em caixas ou sacos que suportem o peso.
                </p>
            </div>
        </article>

        <article class="card">
            <header class="card-header">
                <h3>Orgânico</h3>
            </header>
            <div class="card-content">
                <p>
                    Resíduos orgânicos devem ser armazenados em recipientes fechados para
                    evitar odores e atração de insetos. Se possível, faça compostagem para
                    reutilizar esses materiais como adubo.
                </p>
            </div>
        </article>

        <div class="custom-button">
            <a href="forms.php">
                <button class="btnn">Tenho Materiais</button>
            </a>
        </div>
    </main>

    <footer>
        <nav class="tab-bar">
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
        </nav>
    </footer>
</body>
</html>
