<?php

include ("conta.php");
include ("contaCorrente.php");
include ("contaPoupanca.php");

/*Exemplo de Exercício
Sistema de Gerenciamento de Contas Bancárias

Classe Conta:
Atributos: numero, titular, saldo.
Métodos: depositar(valor), sacar(valor), consultarSaldo().
Classe ContaCorrente (herda de Conta):
Atributos adicionais: limite.
Métodos adicionais: usarLimite(valor).
Classe ContaPoupanca (herda de Conta):
Métodos adicionais: renderJuros(taxa).
Tarefas
Implementar as classes com seus respectivos atributos e métodos.
Criar instâncias das classes e demonstrar o uso dos métodos.
Simular operações de depósito, saque e uso de limite.
Implementação em PHP
Classe Conta
PHP

<?php
class Conta {
    protected $numero;
    protected $titular;
    protected $saldo;

    public function __construct($numero, $titular, $saldo = 0) {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function consultarSaldo() {
        return $this->saldo;
    }
}
?>
Código gerado por IA. Examine e use com cuidado. Mais informações em perguntas frequentes.
Classe ContaCorrente
PHP

<?php
class ContaCorrente extends Conta {
    private $limite;

    public function __construct($numero, $titular, $saldo = 0, $limite = 0) {
        parent::__construct($numero, $titular, $saldo);
        $this->limite = $limite;
    }

    public function usarLimite($valor) {
        if ($valor <= ($this->saldo + $this->limite)) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
}
?>
Código gerado por IA. Examine e use com cuidado. Mais informações em perguntas frequentes.
Classe ContaPoupanca
PHP

<?php
class ContaPoupanca extends Conta {
    public function renderJuros($taxa) {
        $this->saldo += $this->saldo * ($taxa / 100);
    }
}
?>
Código gerado por IA. Examine e use com cuidado. Mais informações em perguntas frequentes.
Exemplo de Uso
PHP

<?php
// Criando instâncias de contas
$conta1 = new ContaCorrente("12345", "Maria Silva", 1000, 500);
$conta2 = new ContaPoupanca("67890", "João Pereira", 2000);

// Operações com ContaCorrente
$conta1->depositar(200);
$conta1->sacar(300);
$conta1->usarLimite(400);
echo "Saldo ContaCorrente: " . $conta1->consultarSaldo() . "\n";

// Operações com ContaPoupanca
$conta2->renderJuros(5);
echo "Saldo ContaPoupanca: " . $conta2->consultarSaldo() . "\n";
?> */

// Criando instâncias de contas
$conta1 = new ContaCorrente("12345", "Maria Silva", 1000, 500);
$conta2 = new ContaPoupanca("67890", "João Pereira", 2000);

// Operações com ContaCorrente
$conta1->depositar(200);
$conta1->sacar(300);
$conta1->usarLimite(400);
echo "Saldo ContaCorrente: " . $conta1->consultarSaldo() . "\n";

// Operações com ContaPoupanca
$conta2->renderJuros(5);
echo "Saldo ContaPoupanca: " . $conta2->consultarSaldo() . "\n";