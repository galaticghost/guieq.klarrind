<?php
    require_once("carro.php");

    $car1 = new carro("2018", "Fiat", "Doblo", "Vermelho"); 
    $car2 = new carro("2014", "Honda", "Fit", "Prata");

    $car1->status();
    $car2->status();

    $car1->vender(70000);
    $car2->vender(50000);