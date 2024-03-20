<?php
//array e afins
    $numeros = array(1,2,3,4,5,6,7,8,9,10,11);
    $num = [1,2,3,4,5,6];
    $semana = ["Domingo","Segunda","Terça","Quarta","Quinta","Sexta","Sabádo"];
    $i = 2;
    
    switch ($num[1]){
        case 1:
            echo "bola";
            break;
        default:
            echo "$semana[$i]";
            if ($semana[$i] == "Terça" or $semana[$i] == "Segunda" or $semana[$i] == "Quinta" or $semana[$i] == "Quarta" or $semana[$i] == "Sexta") {
                echo "-feira";
            }
    }
    echo "<hr>";
//data
    date_default_timezone_set("America/Sao_Paulo");
    $hoje = date(", d/m/y - H:i:s ");
    echo "<br>" . "Hoje é " . $hoje; 

?>
<br>