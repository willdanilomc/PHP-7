<?php

interface Veiculo {
  public function acelerar ($velocidade);
  public function frenar ($velocidade);
  public function trocarMarca($marcha);
}

abstract class Automovel implements Veiculo{
    public function acelerar($velocidade){
      echo "O veiculo acelerou até " . $velocidade . "Km/h";
    }
    public function frenar($velocidade){
      echo "O veiculo frenou até" . $velocidade;
    }
    public function trocarMarca($velocidade){
      echo "O veiculo trocou a marcha" . $marcha;
    }
}

class DelRay extends Automovel{
  public function empurrar(){
  }
}

$carro = new Automovel();
$carro->acelerar(200);

 ?>
