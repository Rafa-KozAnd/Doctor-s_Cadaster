<?php
    if(!isset($_SESSION["usuario"])){
        header("Location:../login.php");
        die;
    }
    
    require_once("./controller/medico.php");
?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Listagem de Médicos </title>
</head>
<body>
<table>
        <tr>
            <th>CRM</th>
            <th>Estado</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Salário</th>
            <th>Especialidades</th>
            <th>Alterar</th>
        </tr>
    <?php   
                                       
    $med = buscaMedico($_GET["crm"]);

    echo "<tr>";
    echo "<td>".$med["crm"]."</td>";
    echo "<td>".$med["crm_estado"]."</td>";
    echo "<td>".$med["nome"]."</td>";
    echo "<td>".$med["telefone"]."</td>";
    echo "<td>".$med["salario"]."</td>";
    echo "<td>".$med["especialidades"]."</td>";
    echo "<td><a href=\"?p=home&deleta=".$med["crm"]."\"> Excluir </a></td>";
    echo "<td><a href=\"./?p=alt&altera=".$med["crm"]."\"> Alterar </a></td>";
    echo "</tr>";

    if (isset($_GET["deleta"])) {
        deletaMedico($_GET["deleta"]);
    }
    
    ?>
    </body>
</html>