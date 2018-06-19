 <?php

$dt = new DateTime();
$periodo = new DateInterval("P15D");
echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);
echo "<br>";
echo $dt->format("d/m/Y H:i:s");

?>

<?php

$datadacompra = new DateTime();
$compraHojeSP = true;
$dataDeEntrega15Dias = new DateInterval("P15D");
$dataDeEntrega5Dias = new DateInterval("P5D");

if ($compraHojeSP === false) {
	echo "<br> Data da compra realizada: " . $datadacompra->format("d/m/y");
	$datadacompra->add($dataDeEntrega15Dias);
	echo "<br> Previsão de entrega é do dia: " . $datadacompra->format("d/m/y");
} else{
	$datadacompra->add($dataDeEntrega5Dias);
	echo " <br> Previsão de entrega: " . $datadacompra->format("d/m/Y");
}


?>
