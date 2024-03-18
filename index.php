<?php
    $frutas = array("Tomate","Maçã","Banana","Pêra","Torta");
    
    $size = count($frutas);
    
    for ($i = 0; $i < $size; $i++) {
        echo $frutas[$i] . "<br>";
    }
    echo $size;
?>
<br>