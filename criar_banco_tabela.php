<?php
session_start();
include ("./pre-conexao.php");
try {
    $conx = new PDO("mysql:host=$host", $user, $pass);
    $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $criadb = "CREATE DATABASE $db";
    $conx->exec($criadb);
}
catch(PDOException $e) {
    echo $criadb . "Falha na criação do DB:<br />" . $e->getMessage();
}

try {
    $criatb = "CREATE TABLE $db.$tb (
        `id`          INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        `nome`   VARCHAR(60) NOT NULL,
        `email`    VARCHAR(60) NOT NULL)
        ENGINE=InnoDB DEFAULT CHARSET=latin1";
    $conx->exec($criatb);
    $_SESSION['msg'] = " "; 
    header("Location: formulario.php");
} catch (PDOException $e) {
    echo "Erro na criação de tabela";
}