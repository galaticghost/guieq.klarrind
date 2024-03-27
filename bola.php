<?php
//Variáveis
    $paises = array("Brasil", "Argentina", "Paraguai", "Uruguai", "Peru", 
    "Chile", "Venezuela", "Bolívia", "Equador", "Colombia");
    $count = count($paises);

//ecolas,forolas e foreolas
    for ($i = 0; $i < $count; $i++) {
        echo $paises[$i] . "<br>";
    }
    echo "<br>";
    foreach($paises as $as) {
        echo "$as<br>";
    }
