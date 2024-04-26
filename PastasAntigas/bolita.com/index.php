<?php
//Herança
require_once ("clsVeiculo.php");
include_once ("clsCarro.php");
include_once ("clsMoto.php");

$v1 = new Veiculo ("Fiat","Doblo");
$v1->ligar();

echo "<hr>";

$c1 = new Carro ("Jeep","Renegade",4);
$c1->ligar();

$m1 = new Moto ("Honda","Twister",250,true);
$m1->ligar();

echo "<br>Velocidade do veículo: " . $v1->velocidade;
$v1->acelerar(100);
echo "<br>Velocidade do veículo: " . $v1->velocidade;

echo "<br>Velocidade do carro: " . $c1->acelerar(50);

echo "<br>Velocidade do carro: " . $c1->frear(50);