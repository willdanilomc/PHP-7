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

$objeto = new Pessoa();

// echo $objeto->nome . "<br>";
// echo $objeto->idade . "<br>";
// echo $objeto->senha . "<br>";

$objeto->verDados();

// PUBLIC - TODO MUNDO VE
// PROTECTED - NAS DUAS
// PRIVATE - SÓ NA MESMA CLASSE

 ?>
