<?php

class Animal
{

    public $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function dormir()
    {

        echo "$this->nome está dormindo!";
    }
}
