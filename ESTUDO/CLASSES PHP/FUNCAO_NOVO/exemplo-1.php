<?php

function soma (int ...$value):string {
    return array_sum($value);
}

echo var_dump (soma(2,2));
echo soma (1.5,5);

?>