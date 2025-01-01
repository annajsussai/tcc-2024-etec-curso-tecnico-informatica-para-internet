<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../../conecta.php';

if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 0) { //nv de admin
    header('Location: index.html');
    exit;

} else {
    $nm_usuario = isset($_SESSION['nm_usuario']) ? $_SESSION['nm_usuario'] : 'Usuário';
    $ds_loginL = isset($_SESSION['login']) ? $_SESSION['login'] : 'Login';
    $endereco = isset($_SESSION['endereco']) ? $_SESSION['endereco'] : 'Endereço';
    $telefone = isset($_SESSION['telefone']) ? $_SESSION['telefone'] : 'Telefone';
    $alias_endereco = isset($_SESSION['alias_endereco']) ? $_SESSION['alias_endereco'] : '';
}

function alterarEcoponto($conn, $nome, $endereco, $telefone, $horarioSemana, $horarioFim, $idEcoponto) {
    $sql = "UPDATE tb_ecoponto SET nm_ecoponto = ?, end_ecoponto = ?, tel_ecoponto = ?, horario_semana = ?, horario_fim = ? WHERE cd_ecoponto = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$nome, $endereco, $telefone, $horarioSemana, $horarioFim, $idEcoponto]);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idEcoponto = $_POST['bairro'];
    $novoNome = $_POST['nome'] ?? '';
    $novoEndereco = $_POST['endereco'] ?? '';
    $novoTelefone = $_POST['telefone'] ?? '';
    $novoHorarioSemana = $_POST['horario_semana'] ?? '';
    $novoHorarioFim = $_POST['horario_fim_semana'] ?? '';

    if (!empty($novoNome) && !empty($novoEndereco) && !empty($novoTelefone) && !empty($novoHorarioSemana) && !empty($novoHorarioFim)) {
        if (alterarEcoponto($conn, $novoNome, $novoEndereco, $novoTelefone, $novoHorarioSemana, $novoHorarioFim, $idEcoponto)) {
            echo "<script>
                    alert('Ecoponto(s) alterado(s) com sucesso!');
                    window.location.href = '../../admin.php';
                  </script>";
            exit;
        } else {
            echo "Erro ao alterar os dados no banco de dados.";
        }
    } else {
        echo "Todos os campos devem ser preenchidos.";
    }
}

$id_ecoponto = isset($_GET['bairro']) ? $_GET['bairro'] : null; // seleciona id
$ecopontos = [];

$sql = "SELECT cd_ecoponto, nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim FROM tb_ecoponto";
$result = $conn->query($sql);           //dados pegos com id
if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ecopontos[$row['cd_ecoponto']] = [
                "nm_ecoponto" => $row['nm_ecoponto'],
                "end_ecoponto" => $row['end_ecoponto'],
                "tel_ecoponto" => $row['tel_ecoponto'],
                "horario_semana" => $row['horario_semana'],
                "horario_fim" => $row['horario_fim']
            ];
        }
    } else {
        echo "<script>alert('Nenhum ecoponto encontrado no banco de dados.');</script>";
    }
} else {
    echo "<script>alert('Erro na consulta ao banco de dados: " . $conn->error . "');</script>";
}
if ($id_ecoponto) {
    $query = "SELECT nm_ecoponto, end_ecoponto, tel_ecoponto, horario_semana, horario_fim FROM tb_ecoponto WHERE cd_ecoponto = ?";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(1, $id_ecoponto, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
        $nome_ecoponto = $result['nm_ecoponto'];
        $endereco_ecoponto = $result['end_ecoponto'];
        $telefone_ecoponto = $result['tel_ecoponto'];
        $horario_semana = $result['horario_semana'];
        $horario_fim_semana = $result['horario_fim'];
    } else {
        die("Erro ao buscar dados do ecoponto.");
    }
}
?>
