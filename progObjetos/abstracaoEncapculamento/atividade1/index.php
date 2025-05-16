<?php

/*
    public $descricao;
    public $estoque;
    public $preco;

*/
include_once ("produto.php");

$produto1 = new Produto;

$produto1->descricao = "Arroz";
$produto1->estoque = 10;
$produto1->preco = 12.50;

$produto2 = new Produto;

$produto2->descricao = "Feijão";
$produto2->estoque = 20;
$produto2->preco = 9.50;

echo "<pre>";
print_r($produto1);
echo "</pre>";

echo "<br><br>";

echo "<pre>";
print_r($produto2);
echo "</pre>";