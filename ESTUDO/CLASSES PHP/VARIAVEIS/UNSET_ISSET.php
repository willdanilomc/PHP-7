<?php

$nome1 = "Willian";
echo $nome1;
// COMANDO UNSET LIMPA VARIAVEL,PODE SE PASSAR VARIAS VÁRIAVEIS.
unset($nome1);

// ISSET -> VALIDAÇÃO (SE ELA EXISTE)
if (isset($nome1)) {
    echo $nome1;
}

?>