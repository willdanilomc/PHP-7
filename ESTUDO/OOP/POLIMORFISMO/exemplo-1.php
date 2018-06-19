<?php

abstract class Animal {

  public function falar(){
    return "som";
  }

  public function mover(){
    return "Anda";
  }

}

class Cachorro extends Animal{
  public function falar(){
    return "Late";
  }
}

class Gato extends Animal{
  public function falar(){
    return "mia";
  }
}

class Passaro extends Animal{
  public function falar(){
    return "Canta";
  }
  public function mover(){
    return "Voa e " . parent::mover();
  }
}

$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

$gato = new Gato();
echo $gato->falar() . "<br>";
echo $gato->mover() . "<br>";

$passaro = new Passaro();
echo $passaro->falar() . "<br>";
echo $passaro->mover() . "<br>";

?>
