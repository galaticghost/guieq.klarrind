<?php
    //Váriaveis e arrays e afins e kfimeom,2! e 
    date_default_timezone_set("America/Sao_Paulo");
    $semana = ["domingo","segunda","terça","quarta","quinta","sexta",
    "sábado"];
    $diaDaSemana = date("w");
    $meses = ["janeiro","fevereiro","março","abril","maio","junho",
    "julho","agosto","setembro","outubro","novembro","dezembro"];
    $mes = date("n");

    // Bomdias e Dias alfabéticos
    echo "Bom dia! Hoje é " . $semana[$diaDaSemana];
    
    //Feiras ou espaços
    if ($semana[$diaDaSemana] == "Domingo" or $semana[$diaDaSemana] == "Sábado") {
        echo "";
    } 
    else {
        echo "-feira";
    }
    
    //afins
    echo ", dia " . date("d") . " do mês de " . $meses[$mes-1] . " do ano de " . date("Y");


?>
<br>