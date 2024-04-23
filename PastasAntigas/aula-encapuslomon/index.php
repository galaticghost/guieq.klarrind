<?php
require_once ("clsBicicleta.php");
require_once ("clsMountainBike.php");
require_once ("clsBicicletaEletrica.php");


$bicicleta = new Bicicleta("Minha bike 001","Caloi","Azul");
$bicicleta->setId("Minha Bike 001");
$bicicleta->setMarca("Caloi");
$bicicleta->setCor("Azul");

echo $bicicleta->getId();
echo "<br>" . $bicicleta->getMarca();
echo "<br>" . $bicicleta->getCor();

$mountainbike = new MountainBike("Mountain","Sundown","Preta",1);
echo "<br>Id: " . $mountainbike->getId();
echo "<br>Marca: " . $mountainbike->getMarca();
echo "<br>Cor: " . $mountainbike->getCor();
echo "<br>Marcha: " . $mountainbike->getMarcha();

$mountainbike->andar();
$mountainbike->mudarMarcha(3);

$bicicletaEletrica = new BicicletaEletrica("Eletrica","Honda","Vermelha",false,"50%");
echo "<br>Usando a bicicleta eletrica";
$bicicletaEletrica->ligar();
$bicicletaEletrica->andar();
$bicicletaEletrica->frear();
$bicicletaEletrica->carregar("100%");
$bicicletaEletrica->andar();