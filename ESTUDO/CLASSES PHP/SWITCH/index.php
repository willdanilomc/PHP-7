<?php

$ano = date(Y);

// Só usa switch caso for igual, caso nao mude o resultado e não precise tratar
switch ($ano){

//        Coloca todos em case
        case 2018:
        echo  "2018";
        break;

        case 2019:
        echo "2019";
        break;

    //Se nao existir mes ele tras
        default:
        echo "Não existe";
}


?>
