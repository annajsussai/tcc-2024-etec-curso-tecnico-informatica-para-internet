<?php
session_start();

if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1) {
  echo "<script>
  alert('Acesso negado! Realize o login antes de acessar a página.');
  window.location.href = '../../../index.html';
</script>";
exit;
} else {
    $nm_usuario = isset($_SESSION['nm_usuario']) ? $_SESSION['nm_usuario'] : 'Usuário';
}
include_once '../../../conecta.php';
if (!$conn) {
    die("Falha na conexão com o banco de dados.");
}

$id_ecoponto = 3;
$query = "SELECT nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim FROM tb_ecoponto WHERE cd_ecoponto = ?";
$stmt = $conn->prepare($query);
$stmt->bindParam(1, $id_ecoponto, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    $nome_ecoponto = $result['nm_ecoponto'];
    $endereco = $result['end_ecoponto'];
    $telefone = $result['tel_ecoponto'];
    $horario_semana = $result['horario_semana'];
    $horario_fim_semana = $result['horario_fim'];
} else {
    die("Erro ao buscar dados do ecoponto.");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../../img/logo.png" type="image/png">
    <link rel="stylesheet" href="pontos.css"> 
    <script src="https://kit.fontawesome.com/b5b13c50cc.js" crossorigin="anonymous"></script>

    <title><?php echo $nome_ecoponto; ?></title>
</head>
<body>
    <div id="calendario">
        <h1><strong><?php echo $nome_ecoponto; ?></strong></h1>

        <div class="custom-button">
            <a class="btnn" href="https://www.google.com/maps/search/Pontos+de+coleta+em+itanhaem/@-24.2149218,-46.6876528,10z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI0MTAxNC4wIKXMDSoASAFQAw%3D%3D">
               Ecopontos
            </a>
        </div>
        
        <h2>Endereço</h2>
        <p><?php echo $endereco; ?></p>
        <h2><?php echo $telefone; ?></h2>

        <table>
            <thead>
                <tr>
                    <th>Dias da Semana</th>
                    <th colspan="3">Horários</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="dias">Seg. a Sex.</td>
                    <td colspan="3"> <?php echo $horario_semana; ?></td>
                </tr>
                <tr>
                    <td class="dias">Sábado</td>
                    <td colspan="3"><?php echo $horario_fim_semana; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <footer>
        <div class="tab-bar">
          <div class="tab-button" id="home">
            <a href="../../home.php">
              <div class="icon"><i class="fa-solid fa-house fa-xs" style="color: #f5f1c8;"></i></div>
            </a>
            <div class="label">HOME</div>
          </div>
    
          <div class="tab-button" id="ecopontos">
            <a href="../ecopontos.php">
              <div class="icon"><i class="fa-solid fa-leaf fa-xs" style="color: #f5f1c8;"></i></div>
            </a>
            <div class="label">ECOPONTOS</div>
          </div>
    
          <div class="tab-button" id="cooperativa">
            <a href="../../cooper.php">
              <div class="icon"><i class="fa-solid fa-circle-info fa-sm" style="color: #f5f1c8;"></i></div>
            </a>
            <div class="label">COOPERATIVA</div>
          </div>
    
          <div class="tab-button" id="diy">
            <a href="../../diy.php">
            <div class="icon"><i class="fa-solid fa-paper-plane fa-xs" style="color: #f5f1c8;"></i></div>
            </a>    
            <div class="label">DIY</div>
          </div>
        </div>
    </footer>

</body>
</html>
