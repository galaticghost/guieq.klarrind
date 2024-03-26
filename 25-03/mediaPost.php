<?php
//Varíolas
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];

//Código extremamtenteijw complexo    
    function mediaPost($n1, $n2, $n3, $n4){
        $notas = [$n1, $n2, $n3, $n4];
        $media = array_sum($notas) / count($notas);
        echo "Média final: " . $media;
    }
//Ecos
    echo mediaPost($n1,$n2,$n3,$n4);
?>
<br>