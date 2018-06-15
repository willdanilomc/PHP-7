<?php

$nota = 5;
$situacao = ($nota >= 6 ) ? "Ternario Aluno Aprovado" : "Ternario Aluno Reprovado";
echo $situacao;

$v1 = 10;
$v2 = 20;

$resultado = ($v1 > $v2) ? $v1 + $v2 : $v1 / $v2;
echo "<br>" . $resultado;

?>
