<?php

require_once("styleLink.html");

session_start();

//-----------------------------------------------//
//Credenciais:
$login = "admin";
$senha = password_hash("admin", PASSWORD_DEFAULT);
//-----------------------------------------------//

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
<div>
<form method="post">
    <fieldset class="login">
        <label for="user">Usuário: </label>
        <input type="text" name="usuario" class="login"><br>
        <label for="pword">Senha: </label>
        <input type="password" name="senha" class="login"><br><br>
        <input type="submit">
    </fieldset>
</form>
</div>