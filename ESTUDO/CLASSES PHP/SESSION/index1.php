<?php
session_start();
$nome = "Willian";
$faz = "teste";

$_SESSION["site"]["nome"] = $nome;
$_SESSION["site"]["faz"] = $faz;
$_SESSION["site"]["validade"] = strtotime("+10 minutes");
?>