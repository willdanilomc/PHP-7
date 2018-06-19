<?php

class Carro
{
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function setMotos($motor)
    {
        $this->motor = $motor;
    }

    public function getAno()
    {
        return $this->$ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibeCarro()
    {
        return array(
            "Modelo" => $this->getModelo(),
            "Motor" => $this->getMotor(),
            "Ano" => $this->getAno()
        );
    }
}



?>