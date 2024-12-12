<?php 
    session_start();
    $msg = $_SESSION['msg'] ?? '';
    $_SESSION['msg'] = "";
    $page = "Inserir";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./form.css?v=1">
    <script src="./formulario.js"></script>
    <title>inserir</title>
</head>
<body>
    <?php include "./header.php" ?>
    <main class="formulario--main">
        <div class="form--container">
            <p id="msgErr"><?= $msg?></p>
            <form>
                <p>Nome: <input type="text" name="nome" id="nome"/></p>
                <p>E-mail: <input type="email" onchange="validate_email()" name="email" id="email"/></p>
            </form>
            <div class="buttons">
                    <button type="submit" onclick="submit()" id="btnSb" class="bloqueado" name="bt">Cadastrar</button>
                    <button onclick="location.href='index.php'">Listar</button>
            </div>
        </div>
    </main>
</body>
</html>