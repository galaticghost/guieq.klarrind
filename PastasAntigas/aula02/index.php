<?php

    $carros = array("doblo" , "opala", "renegade");
    $size = count($carros);
    
    for ($i = 0; $i < $size; $i++) {
        echo $carros[$i] . "<br>";
    }
    $carros[0] = "uno";
    echo $carros[0];
