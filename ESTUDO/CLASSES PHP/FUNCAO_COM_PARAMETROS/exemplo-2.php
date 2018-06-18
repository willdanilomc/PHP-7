<?php
$pessoa = array(
    'nome'=>'Willian',
    'idade' => 20
);

// Usando referencia &
foreach($pessoa as &$value){
    if(gettype($value) === 'integer') $value += 10;
    echo $value;
}

print_r($pessoa);

?>