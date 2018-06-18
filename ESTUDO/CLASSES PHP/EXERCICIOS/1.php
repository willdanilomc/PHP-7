<?php

$valorProduto = 14500.00;
$desconto = 0.5;

if ($valorProduto > 10000){
    echo $valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));
}

?>