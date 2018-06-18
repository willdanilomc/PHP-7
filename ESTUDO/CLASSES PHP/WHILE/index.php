<?php
$condicao = true;

while ($condicao) {
    $numero = rand(0, 10);
    if($numero === 5 ){
        echo "TRÊS";
        $condicao = false;
    }

    echo $numero . "<br>";
}

?>