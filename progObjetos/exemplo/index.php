<?php
class Exemplo {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function metodo1() {
        return $this->valor * 2;
    }

    public function metodo2() {
        // Chamando metodo1 dentro de metodo2
        $resultado = $this->metodo1();
        return $resultado + 10;
    }
}

// Criando uma instância da classe
$obj = new Exemplo(5);

// Chamando metodo2, que por sua vez chama metodo1
echo $obj->metodo2(); // Saída: 20
?>