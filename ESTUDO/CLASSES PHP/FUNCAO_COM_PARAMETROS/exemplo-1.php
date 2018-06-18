<?php

// *--------------------------*
//FUNCAO COM PARAMETROS // COM RETORNO

$salarioMinimo = $_POST["salario"];
$mesesAno = $_POST["ano"];
$nome = $_POST["nome"];

if($mesesAno <= 12){
    function salario($salarioMinimo, $mesesAno)
    {
        $totalGanhoAno = $salarioMinimo * $mesesAno;
        $totalGanhoAno = number_format($totalGanhoAno, 2, ",", ".");
        return $totalGanhoAno;
    }
    echo "Funcionário: $nome <br>" . "Total de R$:" . salario($salarioMinimo, $mesesAno)  . "<br>";
    $novonome = str_replace($nome, "Willian", "José" );
    echo " E irei trocar o nome dele para " . $novonome;
}

else {
    echo "Valor digitado errado";
    }


?>