<?php

class Pagamento
{
    protected $valor;
    protected $data;

    public function __construct($valor, $data)
    {

        $this->valor = $valor;
        $this->data = $data;
    }

    public function getValor()
    {

        return $this->valor;
    }
    public function getData(){
        
        return $this->data;

    }
    public function processarPagamento()
    {

        echo "Processando pagamento no valor de : " . $this->getValor();
    }
}
