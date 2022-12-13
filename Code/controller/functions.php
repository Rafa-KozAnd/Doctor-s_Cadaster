<?php

function validaCPF($cpf) {
    
    if (strlen($cpf) != 11) {
        return false;
    }
    
    $soma = 0;
       
    for ($i = 0; $i < 9; $i++) {         
        $soma += (($i+1) * $cpf[$i]);
    }

    (($soma % 11) == 10)? $d1 = 0: $d1 = $soma % 11;
    
    $soma = 0;
   
    for ($i = 9, $j = 0; $i > 0; $i--, $j++) {
        $soma += ($i * $cpf[$j]);
    }
    
    ($soma % 11) == 10? $d2 = 0: $d2 = $soma % 11;
         
    
    return ($d1 == $cpf[9] && $d2 == $cpf[10])? true : false;
}