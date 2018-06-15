<?php

session_start();
echo $_SESSION["site"]["nome"] .  "<br>";
echo $_SESSION["site"]["faz"] .  "<br>";
echo $_SESSION["site"]["validade"] .  "<br>";

$validade = $_SESSION["site"]["validade"];

$agora = time();
echo $agora . "<br>";

if ($agora <=  $validade){
    echo "valido";
    $_SESSION["site"]["validade"] = strtotime("+1 day");
    echo date("d/m/Y h:i:s", $agora);
} else {
    echo "nao valido";
}

?>