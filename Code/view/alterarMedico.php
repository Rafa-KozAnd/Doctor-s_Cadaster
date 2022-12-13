<?php
   
require_once("./controller/medico.php");
require_once("./controller/functions.php");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Alterar dados do Médico </title>
</head>
<body>
    <?php
    if (isset($_GET["altera"])) {
        $medico = buscaMedico($_GET["altera"]);

        $crm = $medico["crm"];
        $crm_estado = $medico["crm_estado"];
        $nome = $medico["nome"];
        $telefone = $medico["telefone"];
        $salario = $medico["salario"];
    }

    if (isset($_GET["alt"])) {
        
        try {

            alterarMedico($_POST, (int)$_GET["alt"]);
            header("Location:index.php");
    
        } catch (Exception $e) {
            echo "Erro: ". $e->getMessage();
        }
    }

    ?>

    <form action="<?= isset($nome)? "./?p=alt&alt=$crm" : "" ?>" method="post">
        <label for="crm">CRM: </label>
        <input type="text" name="crm" value="<?= isset($nome)? $crm: "" ?>"><br>

        <label for="crm_estado">Estado: </label>
        <input type="text" name="crm_estado" value="<?= isset($nome)? $crm_estado: "" ?>"><br>

        <label for="nome">Nome: </label>
        <input type="text" name="nome" value="<?= isset($nome)? $nome: "" ?>"><br>

        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone" value="<?= isset($nome)? $telefone: "" ?>"><br>

        <label for="salario">Salario: </label>
        <input type="text" name="salario" value="<?= isset($nome)? $salario: "" ?>"><br>

        <label for="especialidades">Especialidades: </label>

        <input type="checkbox" name="especialidades[]" value="ALERGOLOGIA">
        <label for="ALERGOLOGIA">Alergologia</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="ANGIOLOGIA">
        <label for="ANGIOLOGIA">ANGIOLOGIA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="BUCO MAXILO">
        <label for="BUCO MAXILO">BUCO MAXILO</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CARDIOLOGIA CLINICA">
        <label for="CARDIOLOGIA CLINICA">CARDIOLOGIA CLINICA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CARDIOLOGIA INFANTIL">
        <label for="CARDIOLOGIA INFANTIL">CARDIOLOGIA INFANTIL</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA CABEÇA E PESCOÇO">
        <label for="CIRURGIA CABEÇA E PESCOÇO">CIRURGIA CABEÇA E PESCOÇO</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA CARDÍACA">
        <label for="CIRURGIA CARDÍACA">CIRURGIA CARDÍACA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA DE CABEÇA/PESCOÇO">
        <label for="CIRURGIA DE CABEÇA/PESCOÇO">CIRURGIA DE CABEÇA/PESCOÇO</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA DE TORAX">
        <label for="CIRURGIA DE TORAX">CIRURGIA DE TORAX</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA GERAL">
        <label for="CIRURGIA GERAL">CIRURGIA GERAL</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA PEDIÁTRICA">
        <label for="CIRURGIA PEDIÁTRICA">CIRURGIA PEDIÁTRICA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA PLÁSTICA">
        <label for="CIRURGIA PLÁSTICA">CIRURGIA PLÁSTICA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA TORÁCICA">
        <label for="CIRURGIA TORÁCICA">CIRURGIA TORÁCICA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CIRURGIA VASCULAR">
        <label for="CIRURGIA VASCULAR">CIRURGIA VASCULAR</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="CLINICA MEDICA">
        <label for="CLINICA MEDICA">CLINICA MEDICA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="FONOAUDIOLOGIA">
        <label for="FONOAUDIOLOGIA">FONOAUDIOLOGIA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="ENDOCRINOLOGIA">
        <label for="ENDOCRINOLOGIA">ENDOCRINOLOGIA</label>
        <br>
        <input type="checkbox" name="especialidades[]" value="GERIATRIA">
        <label for="GERIATRIA">GERIATRIA: </label>
        <br>
        <input type="checkbox" name="especialidades[]" value="HEMATOLOGIA">
        <label for="HEMATOLOGIA">HEMATOLOGIA </label>
        <br>

        <input type="submit">
    </form>
</body>
</html>