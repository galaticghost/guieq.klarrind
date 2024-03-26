<?php

    $peso = $_POST["peso"];
    $altura = $_POST["altura"];
    $imc = $peso / $altura ** 2;
    function imc($peso, $altura, $imc){
        echo "Com o peso de $peso e a altura de $altura o seu IMC é de $imc <br>";
        if($imc < 17){
            echo "Muito abaixo do peso";
        }
        elseif($imc < 18.5){
            echo "Baixo peso";
        }
        elseif($imc < 25){
            echo "Peso normal";
        }
        elseif($imc < 30){
            echo "Acima do Peso";
        }
        elseif($imc < 35){
            echo "Obesidade grau I";
        }
        elseif($imc < 40){
            echo "Obesidade grau II";
        }
        else{
            echo "Obesidade grau III";
        }
    }
    echo imc($peso, $altura, $imc);
?>
<br>