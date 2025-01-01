<?php
try{
    $conn = new PDO ('mysql:host=localhost;dbname=ecorastro_bd;charset=utf8','root', 'usbw');
    $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
}catch (PDOException $e ) {
} //inclui o arquivo com a conexão do banco de dados
?>