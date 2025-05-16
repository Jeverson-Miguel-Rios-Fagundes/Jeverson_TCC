<?php

/*

Atividade
				
Escreva uma classe Conta, com um atributo saldo e os métodos depositar (acrescenta o valor recebido como parâmetro ao atributo saldo) e sacar (subtrai o valor recebido como parâmetro do atributo saldo). O atributo saldo pode ser negativo. 

Escreva uma subclasse de Conta chamada Poupanca. A classe Poupanca deve ter um atributo chamado diaRendimento que armazena o dia do mês em que ocorre o rendimento da poupança. 

Forneça um construtor que recebe valores para os atributos correspondentes para as duas classes. 

O atributo saldo da classe Poupanca não pode ser negativo. Use esta regra no método modificador do atributo saldo (método setSaldo). Aplique esta mesma regra e redefina (por sobreposição) o método sacar para a classe Poupanca.

No index, teste o programa criando um objeto do tipo Conta e outro objeto do tipo Poupanca. Em seguida realize um depósito na conta no valor de 10000 e depois um saque de 15000 da conta, além de um depósito na poupança no valor de 15000. Depois realize um saque de 20000 na poupança e imprima o saldo da conta e da poupança.

*/
class Conta
{

    private $saldo;

    public function __construct($saldo)
    {
        $this->depositarSaldo($saldo);
    }
    public function depositarSaldo($saldo)
    {

        if ($saldo > 0) {

            $this->saldo = $this->saldo + $saldo;
        }
    }
    public function sacarSaldo($saldo)
    {

        if ($this->saldo < $saldo) {

            echo "Você não tem saldo suficiênta para o saque! <br><br>";
        } else {

            $saldoConta = $this->saldo - $saldo;

            $this->saldo = $saldoConta;
        }
    }
    public function getSaldo()
    {

        return $this->saldo;
    }
}
