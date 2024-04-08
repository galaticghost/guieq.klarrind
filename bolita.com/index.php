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
