<?php
//Fatorial 
//Funções
    function calcFacto($x){
        for ($i = 1; $i < ($x + 1); $i++){
            $x = $x * $i;
        }
    }

    if (isset($_GET["x"])) {
        $v = $_GET["x"];
        echo "O fatorial de $v é " . calcFacto($v);
    }
    else {
        echo "Sem input";
    }
?>
<br>