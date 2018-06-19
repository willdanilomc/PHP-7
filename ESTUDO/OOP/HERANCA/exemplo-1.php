<?php

class Documento {
  private $numero;

  public function getNumero (){
    return $this->numero;
  }
  public function setNumero ($n){
    $this->numero = $n;
  }
}


class CPF extends Documento{

  public function validadar():bool{
    $numeroCPF = $this->getNumero();
    // Aqui Validação CPF
    return true;
  }
}

$doc = new CPF();
$doc -> setNumero("37302794839");
var_dump($doc ->validadar());
echo "<br>";

echo $doc->getNumero();

 ?>
