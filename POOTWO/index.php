<?php
    require_once("carro.php");
    require_once("listagem.php");
    
    echo"<h2> Total de veículos:" . count($carros) . "</h2>";
    foreach($carros as $carro){
        $carro->status($carro);
    }