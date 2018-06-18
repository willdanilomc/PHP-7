<?php

// Função Anonima
function a($callback){
    // Processo lento
    $callback();
}

a(function(){
    echo "Terminou";
});

?>