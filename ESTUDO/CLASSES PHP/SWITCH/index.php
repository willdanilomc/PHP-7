<?php

$mes = $_POST["mes"];

switch ($mes){
        
//        Coloca todos em case
        case 1: $mes = "Janeiro"; break;
        case 2: $mes = "fevereiro"; break;
        case 3: $mes = "Março"; break;
        case 4: $mes = "Abril"; break;
        case 5: $mes = "Maio"; break;
        case 6: $mes = "Junho"; break;
        case 7: $mes = "Julho"; break;
        case 8: $mes = "Agosto"; break;
        case 9: $mes = "Setembro"; break;
        case 10: $mes = "Outubro"; break;
        case 11: $mes = "Novembro"; break;
        case 12: $mes = "Dezembro"; break;
        
//        Se nao existir mes ele tras 
        default: $mes = "Inezistente";
}

echo "Més é " . $mes;


?>
