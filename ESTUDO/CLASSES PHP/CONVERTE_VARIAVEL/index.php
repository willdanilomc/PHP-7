<?php

/*     
    Conversor 
     (int) ou (integer) = Converte para inteiro
     (real) ou (float) = Converte para ponto flutuante
     (string) = Converte para String
     (boolean) ou (bool) Converte para boleano
*/


$valor1 = 3.5;
$valor2 = "5";
$soma = (int) $valor1 + 7;
echo $soma . "<br>";

$valor1 = "3.5";
$soma = (string) $valor1 + $valor2;
echo $soma . "<br>";

$valor3 = "10";
$ver = (bool) $valor3;

if($ver){
    echo "Verdadeiro";
} else {
    echo "Falso";
}


?>
