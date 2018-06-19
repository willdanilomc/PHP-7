<?php

class Pessoa
{
    public $nome; //Atributo
    public function falar() // Metodo
    {
        return "O meu nome é: " . $this->nome;
    }
}

// Crio um objeto e instancio em $willian;
$pt = new Pessoa();
// $willian recebe = "Willian Danilo"
$pt->nome = "Willian Danilo";
// Chamo a classe pessoa e depois o metodo Falar();
echo $pt->falar();


?>
