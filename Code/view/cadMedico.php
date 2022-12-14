<?php
require_once("./controller/medico.php");
require_once("./controller/functions.php");

require_once("styleLink.html");

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title> Cadastro de Médicos </title>
    </head>
<body>
    <?php
   
    if (isset($_POST["nome"])) {
        cadMedico($_POST);

    }
    ?>
    <form action="./?p=cad" method="post" class="teste">
        <fieldset class="input">
            <label for="crm"> <b> CRM: </b> </label>
            <input type="text" name="crm" placeholder="Ex: 123456">

            <label for="crm_estado"> <b> Estado: </b> </label>
            <input type="text" name="crm_estado" placeholder="Ex: PR">

        <br><br>

            <label for="nome"> <b> Nome: </b> </label>
            <input type="text" name="nome" placeholder="Digite nome completo">

            <label for="telefone"> <b> Telefone: </b> </label>
            <input type="text" name="telefone" placeholder="Ex: 41999999999">
        </fieldset>

        <br>
        
        <fieldset class="input">
            <label for="salario"> <b> Salário: </b> </label>
            <input type="text" name="salario" placeholder="Ex: 2200.50"><br>
        </fieldset>

        <br>
        <label > <b> Especialidades: </b> </label>
        <br>

        <fieldset id="check">
            <div class="input">
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
            </div>

            <div class="input">
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
            </div>

            <div class="input">
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
            </div>

            <div class="input">
                <input type="checkbox" name="especialidades[]" value="FONOAUDIOLOGIA">
                <label for="FONOAUDIOLOGIA">FONOAUDIOLOGIA</label>
                <br>
                <input type="checkbox" name="especialidades[]" value="ENDOCRINOLOGIA">
                <label for="ENDOCRINOLOGIA">ENDOCRINOLOGIA</label>
                <br>
                <input type="checkbox" name="especialidades[]" value="GERIATRIA">
                <label for="GERIATRIA">GERIATRIA</label>
                <br>
                <input type="checkbox" name="especialidades[]" value="HEMATOLOGIA">
                <label for="HEMATOLOGIA">HEMATOLOGIA</label>
                <br>
            </div>
        </fieldset>

        <br>

        <input type="submit">
    </form>
</body>
</html>