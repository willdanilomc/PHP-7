<?php

$nome = "Willian Danilo Mendes Costa";
$semEspaco =  trim($nome);
//rtrim() Elimita os espaço da direita
//ltrim() Elimina os espaços da esquerda
//trim() Elimina todos os espacos ambos

echo ' A variavel $semEspaco que contem o conteudo ' . $semEspaco . ' possui ' . strlen($nome) . ' caracteres '; 


?>