<?php

class Produto{

    public $descricao;
    public $estoque;
    public $preco;

    public function aumentarEstoque($unidade){
        
        if ($unidade >= 0) {
            
            $this->estoque = $this->estoque + $unidade;
        }
    }
    public function diminuirEstoque($unidade){
        
        if ($unidade >= 0) {
            
            $this->estoque = $this->estoque - $unidade;
        }
    }
    public function reajustarPreco($percentual){
        
        if ($percentual >= 0) {
            
            $this->preco = $this->preco + ($this->preco * $percentual / 100);
        }
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }
}