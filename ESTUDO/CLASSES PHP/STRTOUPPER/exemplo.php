<?php

$name = "Willian Danilo";

echo strtoupper($name) . "<br>";
echo strtolower($name) . "<br>";
echo ucwords($name) . "<br>";
echo ucfirst($name) . "<br>";
// TROCO O A PELO I
echo str_replace("i", "a", $name) . "<br>";

$frase = "Gosto de faze sexo com meu amor";
$frase = strpos($frase, "sexo");
var_dump($frase);


$frase2 = "testando frase";
$palavra = "mãe";

$texto = substr($frase2, 0, $frase);

var_dump($texto);

?>