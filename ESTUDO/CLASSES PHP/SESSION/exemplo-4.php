<?php
require_once("config.php");
// GERA UMA NOVA ID
session_regenerate_id();
echo session_regenerate_id();

var_dump($_SESSION);
?>