<?php
session_start();
require "./conectar.php";

$bt = filter_input(INPUT_POST, 'bt', FILTER_SANITIZE_STRING);
if ($bt) {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    try {
        $ins = $conx->prepare("INSERT INTO $db.$tb (nome, email) VALUES (:nome, :email)");
        $ins->bindParam(':nome', $nome);
        $ins->bindParam(':email', $email);
        $ins->execute();
        $msg = "Registro incluído com Sucesso!";
        $_SESSION['msg'] = $msg;
        header("Location: formulario.php");
    }
    catch(PDOException $e) {
        $msg = $ins . "Erro na inclusão:<br />" . $e->getMessage();
        $_SESSION['msg'] = $msg;
        header('Location: formulario.php');
    }
}
else {
    $msg = $ins . "Dados não enviados:<br />" . $e->getMessage();
    $_SESSION['msg'] = $msg;
    header('Location:formulario.php');
}