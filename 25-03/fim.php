<?php
    function calcFacto($x, $y){
        for ($i = 1; $i < ($x + 1); $i++){
            $y = $y * $i;
        }
        return $y;
    }

    if (isset($_GET["x"])) {
        $v = $_GET["x"];
        $bola = calcFacto($v, 1);
        echo "O fatorial de $v é $bola";
    }
    else {
        echo "Sem input";
    }
