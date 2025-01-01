<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../../conecta.php'; //"debug"

// ver se fez o login antes
function excluirConta($conn, $idUsuario) {
    $sql = "DELETE FROM usuario WHERE cd_usuario = ?"; //D do CRUD
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$idUsuario]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idUsuario = $_SESSION['id_usuario']; // usar o id como base para consulta no banco

    if (excluirConta($conn, $idUsuario)) {
        echo "<script>
                alert('Conta excluída com sucesso!');
                window.location.href = '../../index.html';
              </script>";
        exit;
    } else {
        echo "Erro ao excluir a conta no banco de dados.";
    }
}
?>
