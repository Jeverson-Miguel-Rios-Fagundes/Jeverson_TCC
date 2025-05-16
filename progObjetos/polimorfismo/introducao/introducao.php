<?php

//INTRODUÇÃO.

//O que é o polimorfismo?

/*
Um mesmo método adquire diferentes comportamentos.

Imaginamos uma classe Animal

Métodos : emitirSom() e mover()

Subclasses : Cachorro, Gato e Passaro

O que acontece é que cada animal emite e se move de formas diferentes.

TIPOS DE POLIMORFISMO

*Polimorfismo de Sobrecarga : acontece quando temos métodos com o mesmo nome, mas com parâmetros diferentes.

*Polimorfismo de Sobreposição : ocorre quando temos métodos com o mesmo nome e mesmos parâmetros, mas com implementações diferentes nas subclasses.

*/
class Animal
{

    //atributos dos animais...
    public function mover()
    {

        echo "<br> O animal está se movendo.";
    }
}
class Cachorro extends Animal
{

    //atributos do cachorro...
    public function mover()
    {

        echo "<br> O cachorro está correndo.";
    }
}
class Passaro extends Animal
{

    //atributos do pássaro
    public function mover()
    {

        echo "<br> O pássaro está voando.";
    }
}
class Gato extends Animal
{

    //atributos do gato
    public function mover()
    {

        echo "<br> o gato está correndo";
    }
}
