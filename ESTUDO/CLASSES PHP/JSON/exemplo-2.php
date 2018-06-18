<?php

$json = '[{"nome":"Willian","idade":20},{"nome":"Aline","idade":21}]';

// Transforma o json em array
$nomes = json_decode($json, true);
var_dump ($nomes);

?>