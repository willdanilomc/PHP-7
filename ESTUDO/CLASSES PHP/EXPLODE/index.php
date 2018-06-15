<?php

//Separa por espaços explode("", $variavel), depois monta uma array que deve se usar foreach.
$texto = "Willian Danilo Mendes Costa";
$explodirNome = explode(" ", $texto, 1);
    foreach($explodirNome as $separados);
    echo "Separados por " . $separados . "<br>";


?>