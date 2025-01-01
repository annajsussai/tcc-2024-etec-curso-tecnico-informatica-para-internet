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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.png" type="image/png">
    <title>Home</title>
    <link rel="stylesheet" href="css/home.css">
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>
</head>


<header id="titulo">
    
    <a href="usuario.php"><i class="fa-solid fa-circle-user fa-3x" style="color: #ffffff;"></i></a>
        <h2 class="pre-titulo">Bem-vindo ao</h2>
        <h1 class="titulo">EcoRastro</h1>
        <img src="img/logo.png" alt="Logo EcoRastro" class="logo"/>
</header>


<body>

    <img src="img/curva.png" alt="curva" class="curva"/>
    <main class="saiba-mais">  
      <div class="saiba">
        <h2>Saiba mais</h2>  
        <i class="fa-solid fa-angles-down" style="color: #000000;"></i>
      </div>
        

        <p>
        O Ecorastro é uma plataforma que conecta cidadãos à cooperativa Coopersol, com o objetivo de dar um destino sustentável aos resíduos recicláveis.
        </p>
        <p>
        A Coopersol atua na coleta e na triagem de materiais recicláveis, contribuindo diretamente para a redução do lixo nos aterros sanitários e a promoção da economia circular.
        </p>
        <p>
        Ao usar o Ecorastro, você está ajudando a transformar o lixo em recursos, colaborando para um futuro mais limpo e sustentável. Junte-se a nós e faça parte dessa mudança positiva para o meio ambiente!
        </p>

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
    </footer>

</body>
</html>
