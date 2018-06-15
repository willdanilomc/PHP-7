<?php

$nomes = array("Willia", "Gustavo", "Everton");

// O Implode faz que separa a ARRAY pelo caractere que você escolher 
$nome_alunos = implode(", ", $nomes);
echo "<li>" . $nome_alunos ." </li>";


// Testando foreach
foreach ($nomes as $nomesNovos){
echo  '<button href="" class="btn"> ' . "  $nomesNovos  " .  '</button>' . "<br>";
}

?>
