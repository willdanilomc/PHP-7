<?php
require_once("config.php");
// Remove todos os preenchimento porem não apaga tudo.
// session_unset($_SESSION['nome']);
echo $_SESSION['nome'];
// Destroi totalmente a sessao, zera todas as informações
// session_destroy();
?>