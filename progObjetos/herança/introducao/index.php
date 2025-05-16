<?php

include_once ("cachorro.php");

$cachorro = new Cachorro("John Wick");
$cachorro->latir();
echo "<br><br>";
$cachorro->dormir();