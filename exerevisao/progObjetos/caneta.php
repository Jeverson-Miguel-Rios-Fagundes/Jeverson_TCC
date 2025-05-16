<?php

//uma classe é com se fosse um molde.
class Caneta {

    //uma caneta tem caracteristicas.

    public  $modelo;
    public  $cor;
    private  $ponta;
    private  $carga;
    protected  $tampada;

    function rabiscar(){

        if ($this->tampada == true) {
            
            echo "<p>Erro! Não posso rabiscar!</p>";
        }else {
            
            echo "<p>Estou rabiscando....</p>";
        }
    }

    function tampar(){

        $this->tampada = true;
    }

    function destanpar(){

        $this->tampada = false;
    }

    
}



?>