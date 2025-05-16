
<?php

/*Exercicio 1. */

function soma($n1, $n2){

    $soma = $n1 + $n2;

    if ($soma < 0) {
        
        $soma = 0;

        return $soma;

    }else {

        return $soma;
    }
}

/**/

/*Exercicio 2.*/

function maiorNumero($n1, $n2, $n3){

    if ($n1 == $n2 and $n2 == $n3) {
        
        $maior = "Todos os valores são iguais.";

        return $maior;
    }else {
        
        if ($n1 > $n2 and $n3) {
            
            $maior = $n1;

            return $maior;
        }else {
            
            if ($n2 > $n1 and $n3) {
                
                $maior = $n2;

                return $maior;
            }else {
                
                if ($n3 > $n1 and $n2) {
                    
                    $maior = $n3;

                    return $maior;
                }else {
                    
                    if ($n2 == $n3 and $n2 > $n1) {
                        
                        $maior = $n2;

                        return $maior;
                    }else {
                        
                        if ($n2 == $n3 and $n2 < $n1) {
                            
                            $maior = $n1;

                            return $maior;
                        }else {
                            
                            if ($n1 == $n3 and $n3 > $n2) {
                                
                                $maior = $n3;

                                return $maior;
                            }else {
                                
                                if ($n1 == $n3 and $n3 < $n2) {
                                    
                                    $maior = $n2;

                                    return $maior;
                                }else {
                                    
                                    if ($n1 == $n2 and $n2 > $n3) {
                                        
                                        $maior = $n2;

                                        return $maior;
                                    }else {
                                        
                                        if ($n1 == $n2 and $n2 < $n3) {
                                            
                                            $maior = $n3;

                                            return $maior;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    
}
/**/ 

/*Exercicio 3.*/

function vardadeiroFalso($n1, $n2, $n3){

    if ($n1 > $n2 and $n2 > $n3) {
        
        $verdadeiro = "Verdadeiro!";

        return $verdadeiro;

    }else {
        
        $falso = "Falso!";

        return $falso;
    }
    
}
/**/ 

/*Exercicio 4.*/

function data($n1, $n2, $n3){


    if ($n1 == 1900 and $n2 >=1 and $n2 <=12 and $n3 >=1 and $n3 <=30) {


        $data = "Válida!";

        return $data;

    }else {
        
        $data = "Inválida!";

        return $data;
    }

    

}
/**/ 

/*Exercicio 5.*/

function temperatura($n1, $n2){

    if ($n2 > 2 or $n2 < 1) {
        
        $escaIncorreta = "A escala selecionada está incorreta";

        return $escaIncorreta;
    }else {
        
        if ($n2 == 1) {
            
            $celFare = $n1 * 1.8 + 32;

            $resultado1 = $celFare . '°F';

            return $resultado1;
        }else {
            
            if ($n2 == 2) {
                
                $fareCel = ($n1 - 32) / 1.8;

                $resultado2 = number_format($fareCel, 2, '.',) . '°C';

                return $resultado2;
            }
        }
    }
}
/* */

/*Exercicio 6.*/

function sequencia($n1){

    $valores = [];
    for ($i=1; $i <= $n1; $i++) { 
        
        for ($b=1; $b <= $i; $b++) { 
           
           
        }
        echo "<br>";
    }
}

/* */

/*Exercicio 7.*/

/*Impar ou par*/
function par($n1){

    if ($n1 % 2 == 0) {
        
        $par = "Par!";

        return $par;

    }else {
    
        $impar = "Impar!";

        return $impar;
    }
}
/* */

/*Multiplicar dois números*/

function multi($n1, $n2){

    $multi = $n1 * $n2;

    return $multi;
}
/* */

/*Dividir dois números.*/

function div($n1, $n2){

    $div = $n1 / $n2;

    return $div;
}

/* Raiz quadrada de um número. */

function raiz($n1){

    $result = pow($n1, 1/2);

    return $result;
}
/* */

/*Expoente*/

function expo($n1, $n2){

    $valor = pow($n1, $n2);

    //pow(): é uma função que nos permite elevar um valor a um expoente. pow(valor, expoente);

    return $valor;
}

/* */

?>