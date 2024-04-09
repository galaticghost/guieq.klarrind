<?php
require_once ("clsBicicleta.php");

$bicicleta = new Bicicleta();
$bicicleta->setId("Minha Bike 001");
$bicicleta->setMarca("Caloi");
$bicicleta->setCor("Azul");

echo $bicicleta->getId();
echo "<br>" . $bicicleta->getMarca();
echo "<br>" . $bicicleta->getCor();
