<?php

$nome_arquivo = $_FILES['arquivo']['name'];
$tipo_arquivo = $_FILES['tipo']['type'];
$tmanho_arquivo = $_FILES['tamanho']['size'];

// COMANDO AONDE VOU SALVAR O ARQUIVO E DESTINO
// ENVIADO UM ARQUIVO E ARMAZENANDO TEMPORARIO
move_uploaded_file($_FILES['arquivo']['tmp_name'], $nome_arquivo);
?>