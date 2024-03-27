<?php
//Varíolas
    $n1 = 9;
    $n2 = 4.8;
    $n3 = 7;
    $n4 = 8.4;

//Código extremamtenteijw complexo    
    function media($n1, $n2, $n3, $n4){
        $media = ($n1 + $n2 + $n3 + $n4) / 4;
        echo "Média final: " . $media;
    }
    function media2($n1, $n2, $n3, $n4){
        $notas = [$n1, $n2, $n3, $n4];
        $media = array_sum($notas) / count($notas);
        echo "Média final: " . $media;
    }
//Ecos
    echo media2($n1,$n2,$n3,$n4);
    