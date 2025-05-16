<?php

include_once "produto.php";

/*
a. Descrição: Bisnaguinhas Estoque: 30 Preço: 4,50 Código: 001 Marca: Seven Boys Cor da embalagem: Vermelho Prazo de Validade: 27/10/2024 Peso da Embalagem: 5g Peso do Produto: 300

*/
$p1 = new Produto;
$p1->descricao = " Bisnaguinhas";
$p1->estoque = 30;
$p1->preco = 4.50;
$p1->codigo = 001;
$p1->marca = "Seven Boys";
$p1->corEmbalagem = "Vermelho";
$p1->dataFabricacao = "27/10/2024";
$p1->prazoValidade = "27/10/2025";
$p1->pesoEmbalagem = "5g";
$p1->pesoProduto =  300;

echo "<pre>";
print_r($p1);
echo "</pre>";

/*

b. Descrição: Nutella Estoque: 45 Preço: 9,50 Código: 002 Marca: Nutella Cor da embalagem: Marrom Prazo de Validade: 10/11/2024 Peso da Embalagem: 15g Peso do Produto: 500

*/
$p2 = new Produto;
$p2->descricao = "Nutella";
$p2->estoque = 45;
$p2->preco = 9.50;
$p2->codigo = 002;
$p2->marca = "Nutella";
$p2->corEmbalagem = "Marrom";
$p2->dataFabricacao = "27/02/2024";
$p2->prazoValidade = "10/11/2025";
$p2->pesoEmbalagem = "15g";
$p2->pesoProduto =  500;

echo "<pre>";
print_r($p2);
echo "</pre>";

/*

c. Descrição: Água Mineral Estoque: 30 Preço: 7,50 Código: 003 Marca: Floresta Cor da embalagem: Branca Prazo de validade 12/12/2026 Peso da Embalagem: 10g Peso do Produto: 500

*/
$p3 = new Produto;
$p3->descricao = "Água Mineral";
$p3->estoque =  30 ;
$p3->preco = 7.50;
$p3->codigo = 003;
$p3->marca = "Floresta";
$p3->corEmbalagem = " Branca";
$p3->dataFabricacao = "20/05/2024";
$p3->prazoValidade = "12/12/2026";
$p3->pesoEmbalagem = "10g";
$p3->pesoProduto =  500;

echo "<pre>";
print_r($p3);
echo "</pre>";
