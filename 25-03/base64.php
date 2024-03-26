<?php
//base 64
    
    //verificação
    if(isset($_GET["c"]) and isset($_GET["s"])){
        $c = $_GET["c"];
        $str = $_GET["s"];
        //onde as coisas são feitas
        switch ($c) {
            case "e":
                echo base64_encode($str);
                break;
            case "d":
                echo base64_decode($str);
                break;
            default:
                echo "Input inválido(Ação)";
        }
    }
    elseif (isset($_GET["s"])){
        echo "Sem input de texto";
    }
    else {
        echo "Sem input";
    }

?>
<br>