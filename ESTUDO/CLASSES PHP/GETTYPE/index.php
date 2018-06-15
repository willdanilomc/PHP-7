<?php

 $nome = "Willian";
    
/* Verificado se é string ou não */
/* Eu passo se ela é do tipo inteiro ou do tipo string */
settype($nome, "string");
settype($nome, "int");

    if(is_string($nome)){
        echo "Nome é string";
    } else {
        echo "não é string";
    }

?>
