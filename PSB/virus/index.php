<?php
require_once("classesAlgo.php");
require_once("classesBlgo.php");
use Blgo as B;
use Algo as A;

$quadrado = new B\quadrado(1,"Quadrado",5);
echo $quadrado->calcularLado();

echo "<br>";

$quadrado = new A\Quadrado(2,12,49.3);
echo $quadrado->definirLado();