<?php

include_once("pessoa.php");

class Amigo extends Pessoa
{

    private $diaDoAniversario;

    public function __construct($nome, $idade, $sexo, $diaDoAniversario)
    {

        $this->diaDoAniversario = $diaDoAniversario;
        parent::__construct($nome, $idade, $sexo);
    }

    public function getDiaDoAniversario()
    {

        return $this->diaDoAniversario;
    }
    public function setDiaDoAniversario($diaDoAniversario)
    {

        $this->diaDoAniversario = $diaDoAniversario;
    }
}
