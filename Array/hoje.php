<?php
    //Váriaveis e arrays e afins e kfimeom,2!
    date_default_timezone_set("America/Sao_Paulo");
    $semana = ["domingo","segunda","terça","quarta","quinta","sexta",
    "sábado"];
    $diaDaSemana = date("w");
    $day = $semana[$diaDaSemana]; 
    $meses = ["janeiro","fevereiro","março","abril","maio","junho",
    "julho","agosto","setembro","outubro","novembro","dezembro"];
    $mes = date("n");
    $mes = $meses[$mes-1];

    // Bomdias e Dias alfabéticos
    echo "Bom dia! Hoje é " . $semana[$diaDaSemana];
    
    //Feiras ou espaços
    if ($day == "Domingo" or $day == "Sábado") {
        echo "";
    } 
    else {
        echo "-feira";
    }
    
    //afins
    echo ", dia " . date("d") . " do mês de " . $mes . " do ano de " . date("Y");


?>
<br>