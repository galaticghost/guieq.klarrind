<?php
//Varíolas
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];
    $n4 = $_GET["n4"];

//Código extremamtenteijw complexo    
    function media($n1, $n2, $n3, $n4){
        $notas = [$n1, $n2, $n3, $n4];
        $media = array_sum($notas) / count($notas);
        echo "Média final: " . $media;
    }
//Ecos
    echo media($n1,$n2,$n3,$n4);
