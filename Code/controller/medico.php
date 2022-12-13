<?php

require_once("./model/medicoDAO.php");

function listarMedicos() {
    return listarMedicosDAO(); 
}

function cadMedico($medico) {
    $checkbox = $medico["especialidades"];

    $especialidades = "";

    if (sizeof($checkbox) < 2) {
        echo "Erro, precisa ser no minimo duas especialidades";
        echo "<a href='?p=home'>Voltar</a>";
    } else { 

        for ($i = 0; $i < sizeof($checkbox); $i++) { 
            $especialidades .= $checkbox[$i] . '-';
        }
    
        unset($medico["especialidades"]);
    
        $medico += array("especialidades" => $especialidades);
    
        cadMedicoDAO($medico);

    }
}

function deletaMedico($crm) {
    delMedicoDAO($crm);
   
    header("Location:./?p=home");
}

function buscaMedico($crm) {
    return buscarMedicoDAO($crm);
}

function alterarMedico($medico) {
    
    $checkbox = $medico["especialidades"];

    $especialidades = "";

    if (sizeof($checkbox) < 2) {
        echo "Erro, precisa ser no minimo duas especialidades";
        echo "<a href='?p=home'>Voltar</a>";
    } else { 

        for ($i = 0; $i < sizeof($checkbox); $i++) { 
            $especialidades .= $checkbox[$i] . '-';
        }
    
        unset($medico["especialidades"]);
    
        $medico += array("especialidades" => $especialidades);
    }
    
    try {
        altMedicoDAO($medico);
    } catch (Exception $e) {
        throw new Exception($e->getMessage());
    }

}