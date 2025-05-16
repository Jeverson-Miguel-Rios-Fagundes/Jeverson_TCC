<?php

include_once ("produto.php");

$produto = new Produto ;
$produto->estoque = 30;
$produto->preco = 100;
$produto->setDescricao("Feijão");
$produto->aumentarEstoque(10);
$produto->reajustarPreco(10);

$produto2 = new Produto ;
$produto2->estoque = 30;
$produto2->preco = 100;
$produto2->setDescricao("Feijão");
$produto2->aumentarEstoque(10);
$produto2->reajustarPreco(10);

echo "<pre>";
print_r($produto);
echo "</pre>";

echo "<br><br>";

echo "<pre>";
print_r($produto2);
echo "</pre>";