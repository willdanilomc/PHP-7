<?php

interface Veiculo {
  public function acelerar ($velocidade);
  public function frenar ($velocidade);
  public function trocarMarca($marcha);
}

class Civic implements Veiculo{
  public function acelerar($velocidade){
    echo "O veiculo acelerou até" . $velocidade . "Km/h";
  }
  public function frenar($velocidade){
    echo "O veiculo frenou até" . $velocidade;
  }
  public function trocarMarca($velocidade){
    echo "O veiculo trocou a marcha" . $marcha;
  }
}

  $carro = new Civic();
  $carro->trocarMarca(1);


 ?>
