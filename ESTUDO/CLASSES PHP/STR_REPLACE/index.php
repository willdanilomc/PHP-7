<?php

$frase = "Willian faz tanto";
echo $frase . "<br>";

// Troca a variavel $frase e busca o "tanto" e troca por "coisas"
$frase = str_replace("tanto", "coisas", $frase);
// 
echo $frase . "<br>";


?>