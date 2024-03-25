<?php
// Testes com funções
    function getPI(){
    return pi();
    }

    function RaioArea($x){
        return getPI() * pow($x, 2);
    }
    $bola = RaioArea(3);
    echo "A área do raio 3 é de " . $bola;
?>
<br>