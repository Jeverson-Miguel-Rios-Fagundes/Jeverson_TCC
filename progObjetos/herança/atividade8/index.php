<?php

include_once ("funcionario.php");

$funcionario = new Funcionario("Roberto Graziadei", 20, "Masculino", "2022311922", 5000);

echo "O seu nome é : " . $funcionario->getNome();
echo "<br><br>";
echo "A sua idade é : " . $funcionario->getIdade();
echo "<br><br>";
echo "O seu sexo é : " . $funcionario->getSexo();
echo "<br><br>";
echo "A sua metricula é : " . $funcionario->getMatricula();
echo "<br><br>";
echo "O seu salário total é : " . $funcionario->getSalarioTotal();
echo "<br><br>";
echo "60% do seu salário é : " . $funcionario->getSalarioPrimeiraParcela();
echo "<br><br>";
echo "40% do seu salário é : " . $funcionario->getSalarioSegundaParcela();
echo "<br><br>";
