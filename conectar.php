<?php
require ("pre-conexao.php");
try {
    $conx = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $conx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    include ("./criar_banco_tabela.php");
}
?>