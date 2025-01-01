<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
include '../../conecta.php'; //"debug"

// ver se fez o login antes
if (!isset($_SESSION['nivel']) || $_SESSION['nivel'] != 1) {
    echo "<script>
    alert('Acesso negado! Você não possui permissão para acessar esta página.');
    window.location.href = '../index.html';
  </script>";
  exit;
}

function alterarDadosUsuario($conn, $nome, $email, $telefone, $endereco, $novoAlias ,$idUsuario) {
    $sql = "UPDATE usuario SET nm_usuario = ?, ds_login = ?, nm_telefone = ?, ds_endereco = ?, alias_endereco = ? WHERE cd_usuario = ?"; //U do CRUD
    $stmt = $conn->prepare($sql);
    return $stmt->execute([$nome, $email, $telefone, $endereco, $novoAlias, $idUsuario]);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idUsuario = $_SESSION['id_usuario']; // usar o id como base pra consultar com sql
    $novoNome = $_POST['nome'] ?? '';
    $novoEmail = $_POST['email'] ?? '';
    $novoTelefone = $_POST['telefone'] ?? '';
    $novoEndereco = $_POST['endereco'] ?? '';
    $novoAlias = $_POST['endereco_alias'] ?? '';

    if (!empty($novoNome) && !empty($novoEmail) && !empty($novoTelefone) && !empty($novoEndereco)) {
        if (alterarDadosUsuario($conn, $novoNome, $novoEmail, $novoTelefone, $novoEndereco, $novoAlias, $idUsuario)) {
                $_SESSION['nm_usuario'] = $novoNome;
                $_SESSION['login'] = $novoEmail;
                $_SESSION['telefone'] = $novoTelefone;
                $_SESSION['endereco'] = $novoEndereco;
                $_SESSION['alias_endereco'] = $novoAlias;

            echo    "<script>
                        alert('As alterações foram salvas com sucesso!');
                        window.location.href = '../usuario.php';
                    </script>";
            exit;
        } else {
            echo "Erro ao alterar os dados no banco de dados.";
        }
    } else {
        echo "Todos os campos devem ser preenchidos.";
    }
}
?>
