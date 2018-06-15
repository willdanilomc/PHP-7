<?php


$frase = "Willian danilo mendes costa";
$quantidade = substr_count($frase, "a");

echo "A palavra a aparece: " . $quantidade . " vezes ";

$email = "willian@gmail.com";
$arromba = substr_count($email, "@");
$contaPonto = substr_count($email, ".");

if (($arromba > 0) && ($contaPonto > 0)) {
    echo "Email Válido";
} else{
    echo "Email não é válido";
}

?>