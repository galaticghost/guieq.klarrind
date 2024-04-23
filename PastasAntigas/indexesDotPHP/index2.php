<?php
    $frutas = array("Tomate", "Maçã", "Banana", "Laranja", "Bergamota", "Arroz", "Pêra");
    $size = count($frutas);
    $i = 0;

    do {
        if ($frutas[$i] == "Arroz"){
            echo "Arroz não é uma fruta?<br>";
            $i++;
        }
        else {
            echo $frutas[$i] . "<br>";
            $i+= 1;
        }
    }
    while ($i < $size);
