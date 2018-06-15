<?php


function somar() //CRIEI A FUNCAO SEM PARAMETROS // SEM RETORNO
{
    global $num1;
    global $num2;
    $soma = $num1 + $num2;
    echo "Total é: $soma";
}

$num1 = 15;
$num2 = 15;

somar(); 
// chama a função


// *--------------------------*
//FUNCAO COM PARAMETROS // COM RETORNO

$num1 = 15;
$num2 = 15;

function somar2($num1, $num2) 
{
    $soma = $num1 + $num2;
    return $soma;
}

$total = somar2($num1, $num2); 

// chama a função com return;
echo "Total é:" . $total . "<br>";

// *--------------------------*
// COLOCANDO O "&" NO ATRIBUTO ELE VAI PASSAR A RECEBER O VALOR DE FORA -> REFERENCIA
function somar3(& $num1) 
{
    $num1 *= 2;
    echo '$num1 = ' . $num1 . "<br>";
}

$num = 5;
somar ($num1);

echo somar();

?>