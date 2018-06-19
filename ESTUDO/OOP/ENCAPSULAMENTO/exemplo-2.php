<?php

// Classe
class Pessoa {

  public $nome = "Willian";
  protected $idade = 48;
  private $senha = 123456;

  public function verDados(){
    echo $this -> nome . "<br>";
    echo $this -> idade . "<br>";
    echo $this -> senha . "<br>";
  }
}

class Programador extends Pessoa {
  public function verDados(){
    // Funcao que ve qual classe está herdando
    echo get_class($this) . "<br>";
    echo $this -> nome . "<br>";
    echo $this -> idade . "<br>";
    echo $this -> senha . "<br>";
  }
}

$objeto = new Programador();
$objeto->verDados();



 ?>
