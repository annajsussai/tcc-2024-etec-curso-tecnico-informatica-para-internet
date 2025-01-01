<?php
session_start();
if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1) {
  echo "<script>
  alert('Acesso negado! Realize o login antes de acessar a página.');
  window.location.href = '../../index.html';
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
    <link rel="icon" href="../img/logo.png" type="image/png">
    <title>Ecopontos</title>
    <link rel="stylesheet" href="../css/ecopontos.css">
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>

</head>

<header id="user">
    
  <a href="../usuario.php"><i class="fa-solid fa-circle-user fa-3x" style="color: #ffffff;"></i></a>

    </header>

<body>
  <h1 id="eco">Ecopontos</h1>
  <div class="header-button">
    <a href="https://www.google.com/maps/search/Pontos+de+coleta+em+itanhaem/@-24.2149218,-46.6876528,10z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MTAxNC4wIKXMDSoASAFQAw%3D%3D">
      <button>Ecopontos</button>
    </a>
  </div>

  <div>
    <p>
      Os Ecopontos foram criados para evitar o despejo de materiais em vias
      públicas, rios e terrenos baldios, causando problemas de saúde e
      enchentes. Materiais recicláveis como papel, papelão, vidro e metal
      podem ser levados para os Ecopontos e encaminhados para centrais de
      triagem. Um caminhão da Cooperativa Coopersol Reciclando atende
      voluntários na <a href="https://www.google.com/maps/place/CooperSolReciclando/@-24.1678709,-46.7888753,17z/data=!4m15!1m8!3m7!1s0x94ce2a871d242259:0x7b43d3e5989828f3!2sRua+Jo%C3%A3o+Andrade+J%C3%BAnior,+400+-+O%C3%A1sis,+Itanha%C3%A9m+-+SP,+11170-000!3b1!8m2!3d-24.167804!4d-46.7888392!16s%2Fg%2F11rvfy2j6h!3m5!1s0x94ce2a86f9a6c267:0x98f7dbb1362ca7c3!8m2!3d-24.1678709!4d-46.7888753!16s%2Fg%2F11d_8c5grw?entry=ttu&g_ep=EgoyMDI0MTAyOS4wIKXMDSoASAFQAw%3D%3D" target= "_ blank">Rua João Andrade Junior, 400.</a>
    </p>
  </div>

  <h2><strong>Local</strong></h2>
  <div class="pontos-coleta">
    
      <a href="pontos/gaivota.php">
        <button>Gaivota</button>
      </a>
    

      <a href="pontos/loty.php">
        <button> Loty </button>
      </a>
   
      <a href="pontos/savoy.php">
        <button> Savoy </button>
      </a>
   
    
      <a href="pontos/cibratel.php">
        <button> Cibratel II </button>
      </a>
    
  </div>

  <img src="../img/meialua.png" alt="curva" class="curva" />
  <main class="mat">
    <h1>Tem Material?</h1>
    <p>
      Você tem material reciclável, porém não sabe como descartar ou armazenar?
      Clique aqui e o guiaremos:
    </p>
    <div class="card">
      <a href="../material.php">
        <button class="card">Materias de Coleta</button>
      </a>  
    </div>
  </main> 

  <footer>
    <div class="tab-bar">
      <div class="tab-button" id="home">
        <a href="../home.php">
          <div class="icon"><i class="fa-solid fa-house fa-xs" style="color: #f5f1c8;"></i></div>
        </a>
        <div class="label">HOME</div>
      </div>

      <div class="tab-button" id="ecopontos">
        <a href="ecopontos.php">
          <div class="icon"><i class="fa-solid fa-leaf fa-xs" style="color: #f5f1c8;"></i></div>
        </a>
        <div class="label">ECOPONTOS</div>
      </div>

      <div class="tab-button" id="cooperativa">
        <a href="../cooper.php">
          <div class="icon"><i class="fa-solid fa-circle-info fa-sm" style="color: #f5f1c8;"></i></div>
        </a>
        <div class="label">COOPERATIVA</div>
      </div>

      <div class="tab-button" id="diy">
        <a href="../diy.php">
        <div class="icon"><i class="fa-solid fa-paper-plane fa-xs" style="color: #f5f1c8;"></i></div>
        </a>   
            <div class="label">DIY</div>
          </div>
    </div>
</footer>

</body>
</html>