<?php

include_once("../atividade7/pessoa.php");

class Funcionario extends Pessoa
{

    private $matricula;
    private $salario;

    public function  __construct($nome, $idade, $sexo, $matricula, $salario)
    {
        //$this->salario = $salario;
        $this->setSalario($salario);
        $this->matricula = $matricula;

        parent::__construct($nome, $idade, $sexo);
    }

    public function setSalario($salario)
    {

        if ($salario < 0) {

            $this->salario = 0;
        } else {
            $this->salario = $salario;
        }
    }
    public function getSalarioPrimeiraParcela() {

        $salarioPrimeiraParcela = $this->salario;

        $salario60 = $salarioPrimeiraParcela * 60 / 100;

        return $salario60;
    }
    public function getSalarioSegundaParcela() {

        $salarioSegundaParcela = $this->salario;

        $salario40 = $salarioSegundaParcela * 40 / 100;

        return $salario40;
    }
    function getMatricula(){
    
        return $this->matricula;
    }
    function getSalarioTotal(){
        
        return $this->salario;
    }
}
