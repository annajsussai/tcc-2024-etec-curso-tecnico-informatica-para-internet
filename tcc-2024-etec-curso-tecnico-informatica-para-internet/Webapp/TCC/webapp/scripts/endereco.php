<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../../conecta.php'; //"debug"

// ver se fez o login antes
if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1) {
    header('Location: ../index.html');
    exit;
}

function excluirEndereco($conn, $idUsuario) {
    $sql = "UPDATE usuario SET alias_endereco = NULL WHERE cd_usuario = ?";
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$idUsuario]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idUsuario = $_SESSION['id_usuario']; // usar o id como base para consulta no banco

    if (excluirEndereco($conn, $idUsuario)) {
        echo "<script>
                alert('Alias de endereço removido com sucesso!');
                window.location.href = '../../index.html';
              </script>";
        exit;
    } else {
        echo "Erro ao remover o alias de endereço no banco de dados.";
    }
}
?>
