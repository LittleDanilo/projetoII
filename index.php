<!DOCTYPE html>
<?php 
    session_start();
    $page = "Listagem";
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>listar</title>
</head>
<body>
    <?php include "./header.php" ?>
    <main class="index--main">
        <div class="index--container">
            <button onclick="location.href='formulario.php'">Formulario</button>
            <?php
                require "./listar.php";
            ?>
        </div>
    </main>
</body>
</html>