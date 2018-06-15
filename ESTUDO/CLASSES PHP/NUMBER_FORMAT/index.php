<?php

// Formata o numero e passa os parametros para ele, em decimal 
$numero = 65000;
$numero = number_format($numero, 2 , ",", ".");
echo "R$ ". $numero;

?>