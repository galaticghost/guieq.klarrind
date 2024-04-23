<?php
//metólos 
    function somar($x, $y){
        return $x + $y;
    }
    function getPI(){
        return pi();
    }
    function impressor(){
        echo "<br>Carlinismo e Carlosboneldianismo<br>";
    }
    function xina($x){
        $area = getPI() * ($x * $x);
        echo "A area é de $area";
    }
//Varíolas, ecolas e fointions
    $bola = 1.5 ;
    $bola2 = 7937;

    $xina = somar($bola, $bola2);
    echo $xina;
    echo "<br>" . somar($bola, $bola);
    impressor();
    echo "Valor pi: " . getPI() . "<br>";
    echo "<hr>Grande" . xina(21);
