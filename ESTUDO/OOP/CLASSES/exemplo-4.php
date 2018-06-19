<?php

class Endereco{

private $logradouro;
private $numero;
private $cidade;

// Metodos mágicos existe 9 métodos
public function __construct($a, $b, $c){
  $this->logradouro = $a;
  $this->numero = $b;
  $this->cidade = $c;
  }

  public function __destruct(){
    var_dump("Destruir");
  }

  public function __toString(){
    return $this->logradouro. "," . $this->numero . "," . $this->cidade . "<br>";
  }
}

$meuEndereco = new Endereco("Rua Adolpho", "123", "Sorocaba");
echo($meuEndereco);
var_dump($meuEndereco);
unset($meuEndereco);


 ?>
