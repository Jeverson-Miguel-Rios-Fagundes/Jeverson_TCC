<?php


include("amigo.php");

$amigo = new Amigo ("Jeverson", 19, "MascuLino", "12-12-2000");

echo "Nome :" . $amigo->getNome();
echo "<br><br>";
echo "Idade :" . $amigo->getIdade();
echo "<br><br>";
echo "Puto de qual tipo :" . $amigo->getSexo();
echo "<br><br>";
echo "Dia do aniversário :" . $amigo->getDiaDoAniversario();
