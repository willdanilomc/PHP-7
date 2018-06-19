<?php

// $ts =  strtotime("2001-09-11");
// Aceita expressoes +1 day, +1 wekk, +1mouth, +1 hours
$ts = strtotime("+1 week");
echo date ("l, d/m/Y", $ts);
?>