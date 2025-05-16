<?php
class elevador{
    private $capTotal;
    private $totAndares;
    private $capAtual = 0;
    private $andarAtual = 0;

    public $status = true;



    function __construct($totAndares,$capTotal,$capAtual,$andarAtual)
    {
        $this->setTotAndares($totAndares);
        $this->setCapTotal($capTotal);
        $this->setCapAtual($capAtual);
        $this->setAndarAtual($andarAtual);
    }
    function entrar(){
        $this->capAtual++;
        

        if($this->capAtual > $this->capTotal){
        $this->capAtual = $this->capTotal;
            echo "Capacidade máxima atingida.";
        }
       
    }

    function sair(){
        $this->capAtual = $this->capAtual - 1;
        if($this->capAtual < 0){
            $this->capAtual = 0;
            echo"Elevador vázio.";
        }
    }

    function subir(){
        $this->andarAtual++;
        if($this->andarAtual > $this->totAndares){
            $this->andarAtual = $this->totAndares;
            echo "você já esta no último andar";
        }
    }
    function descer(){
        $this->andarAtual--;
        if($this->andarAtual < 0){
            $this->andarAtual = 0;
            echo"Você já esta no terreo.";
        }
    }

    // SET
    function setCapTotal($capTotal){
        return $this->capTotal = $capTotal;
    }

    function settotAndares($totAndares){
        return $this->totAndares = $totAndares;
    }

    function setStatus($status){
        return $this->status = $status;
    }

    function setAndarAtual($andarAtual){
        return $this->andarAtual = $andarAtual;
    }

    function setCapAtual($capAtual){
        return $this->capAtual = $capAtual;
    }

    // GET

    function getCapTotal(){
        return $this->capTotal;
    }
 
    function getTotAndares(){
        return $this->totAndares;
    }

    function getStatus(){
        return $this->status;
    }
    
    function getAndarAtual(){
        return $this->andarAtual;
    }

    function getCapAtual(){
        return $this->capAtual;
    }

}