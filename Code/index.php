<?php
session_start();

if (isset($_GET["logout"])) {
    unset($_SESSION["usuario"]);
}

if (!isset($_SESSION["usuario"])) {
    header("Location:./login.php");
    die;
}

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Cadastro de Médicos</title>
    </head>
    <body>

    <a href="?logout">Logout</a>
    <br><br>

    <?php
        
        require_once("./menu.php");
    ?>
        
    <?php
        isset($_GET["p"])? $page = $_GET["p"] : $page = "home";
    
        switch($page) {
            case "home":
                require_once("./busca.php");
                require_once("./view/listarMedico.php");
            break;
            case "cad":
                require_once("./view/cadMedico.php");
            break;
            case "alt":
                require_once("./view/alterarMedico.php");
            break;
            case "busca":
                require_once("./view/buscaMedico.php");
            break;
        }
    ?>
    </body>
</html>