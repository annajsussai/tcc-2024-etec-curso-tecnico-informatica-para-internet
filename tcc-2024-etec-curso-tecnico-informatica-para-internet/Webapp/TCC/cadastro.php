<?php
session_start();

include 'conecta.php';

$nm_usuario = $_POST['nm_usuario']; 
$ds_login = $_POST['ds_login']; 
$senha = $_POST['senha'];
$ds_endereco = $_POST['ds_endereco'];
$bairro = $_POST['bairro'];
$telefone = $_POST['telefone'];

$nivel = 1;

try {
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE ds_login = :ds_login");     //verifica se ja existe
    $stmt->bindParam(':ds_login', $ds_login);

    if ($stmt->execute()) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
         
        if ($row) {
            echo "Esse email já está cadastrado";
        } else {
            $stmt_insert = $conn->prepare("INSERT INTO usuario (nm_usuario, ds_login, ds_senha, nr_nivel, bairro, ds_endereco, nm_telefone) VALUES (:nm_usuario, :ds_login, :senha, :nivel, :bairro, :ds_endereco, :telefone)");

            $stmt_insert->bindParam(':nm_usuario', $nm_usuario);
            $stmt_insert->bindParam(':ds_login', $ds_login);
            $stmt_insert->bindParam(':senha', $senha);
            $stmt_insert->bindParam(':nivel', $nivel);
            $stmt_insert->bindParam(':ds_endereco', $ds_endereco);
            $stmt_insert->bindParam(':bairro', $bairro);
            $stmt_insert->bindParam(':telefone', $telefone);

            
            if ($stmt_insert->execute()) {
                $_SESSION['login'] = $ds_login;

                echo "Usuário cadastrado com sucesso!";
            } else {
                echo "Erro ao cadastrar o usuário: " . $stmt_insert->errorInfo()[2];
            }
        }
    } else {
        echo "Erro ao verificar o login: " . $stmt->errorInfo()[2];
    }
} catch (PDOException $e) {
    echo "Erro no banco de dados: " . $e->getMessage();
}

$conn = null;
?>
