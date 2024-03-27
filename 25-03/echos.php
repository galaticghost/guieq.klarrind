<?php
// Testes com funções
    function getPI(){
        return pi();
    }

    function RaioArea($x){
        return getPI() * pow($x, 2);
    }
    if (isset($_GET["y"])){
        $y = $_GET["y"];
        $bola = RaioArea($y);
        echo "A área do raio $y é de " . $bola;
    }
    else {
        echo "Sem input";
    }
