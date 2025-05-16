<?php

include_once ("animal.php");

class Cachorro extends Animal
{
    public function __construct($nome)
    {
        parent::__construct($nome);
    }
    function latir()
    {

        echo "$this->nome está latindo!";
    }
}
