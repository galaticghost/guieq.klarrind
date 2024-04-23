<?php
    function somar($x, $y){
        return $x + $y;
    }
    if (isset($_GET["x"]) and isset($_GET["y"])){
        $v1 = $_GET["x"];
        $v2 = $_GET["y"];
        $result = somar($v1, $v2);
        echo "$result";
    }
    else {
        echo "Sem input";
    }
