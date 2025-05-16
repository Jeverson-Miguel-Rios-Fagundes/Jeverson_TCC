<?php

include("conecta.php");

$id = $_POST['id'];

$sql = "DELETE FROM clientes WHERE id=$id";
mysqli_query($mysql, $sql);

header("location:clientes.php?deletado=1");
