<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'Willian',
    'idade' => 20
));

array_push($pessoas, array(
    'nome' => 'Aline',
    'idade' => 21
));

// Transforma o array em json
echo json_encode($pessoas);

?>