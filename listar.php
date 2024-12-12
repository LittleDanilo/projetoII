<?php
    session_start();
    require "./conectar.php";

    try {
        $sel = "SELECT * FROM $db.$tb ORDER BY id DESC";
        $result = $conx->query($sel);
        if ($result->rowCount() > 0) {
            echo "<ul>";
            while ($linha_array = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<li>";
                echo "<p><b>ID</b>: ". $linha_array['id'] ."</p>";
                echo "<p><b>NOME</b>: ". $linha_array['nome'] ."</p>";
                echo "<p><b>E-MAIL</b>: ". $linha_array['email'] ."</p>";
                echo "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Não há nenhum registro!</p>";
        }
        
    }
    catch (PDOException $e) {
        $msg =  "Consulta falha...<br />" .  $e->getMessage();
        $_SESSION['msg'] = $msg;
        header('Location: formulario.php');
        $conx = null;
    }        
?>