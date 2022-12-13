<?php

session_start();

$login = "teste";
$senha = password_hash("123", PASSWORD_DEFAULT);

if (isset($_SESSION["usuario"])) {
    header("Location:./index.php");
}

if (isset($_POST["usuario"])) {

    if ($_POST["usuario"] == $login AND

    password_verify($_POST["senha"], $senha)) {

        echo "Login e senha corretos";
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location:./index.php");

    } else {
        
        echo "Login ou senha inválidos";
    }
}
?>
<form method="post">
    Usuario: <input type="text" name="usuario"><br>
    Senha: <input type="password" name="senha"><br>
    <input type="submit">
</form>