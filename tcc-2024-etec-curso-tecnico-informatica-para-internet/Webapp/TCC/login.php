<?php
session_start();

include 'conecta.php';

$ds_loginL = $_POST['ds_loginL']; // recebe os valores de inserção de login
$senhaL = $_POST['senhaL']; // recebe os valores de senha

$stmt = $conn->prepare("SELECT * FROM usuario, tb_ecoponto WHERE usuario.ds_login = :ds_login AND usuario.  ds_senha = :senha");
$stmt->bindParam(':ds_login', $ds_loginL);
$stmt->bindParam(':senha', $senhaL);

if ($stmt->execute()) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        // armazenar dados na sessao
        $_SESSION['login'] = $row['ds_login'];
        $_SESSION['senha'] = $row['ds_senha'];
        $_SESSION['nivel'] = $row['nr_nivel'];
        $_SESSION['nm_usuario'] = $row['nm_usuario'];
        $_SESSION['endereco'] = $row['ds_endereco'];
        $_SESSION['telefone'] = $row['nm_telefone'];
        $_SESSION['id_usuario'] = $row['cd_usuario'];
        $_SESSION['alias_endereco'] = $row['alias_endereco'];
        $_SESSION['id_ecoponto'] = $row['cd_ecoponto'];
        $_SESSION['nm_ecoponto'] = $row['nm_ecoponto'];
        $_SESSION['end_ecoponto'] = $row['end_ecoponto'];
        $_SESSION['tel_ecoponto'] = $row['tel_ecoponto'];
        $_SESSION['horario_semana'] = $row['horario_semana'];
        $_SESSION['horario_fim'] = $row['horario_fim'];


        if ($_SESSION['nivel'] == 1) {
            echo "webapp/home.php";
        } else {
            echo "admin.php";
        }
    } else {
        echo "Usuário não encontrado!";
    }
} else {
    echo "Erro na execução da consulta: " . $stmt->errorInfo()[2];
}

$conn = null;
?>
