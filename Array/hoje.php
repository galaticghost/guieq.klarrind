<?php
    date_default_timezone_set("America/Sao_Paulo");
    $semana = array("domingo","segunda","terça","quarta","quinta","sexta",
    "sábado");
    $diaDaSemana = date("w");
    $hoje = date("d");
    $mes = date("n");
    $ano = date("Y");
    $day = $semana[$diaDaSemana]; 
    $meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
    $mes = $meses[$mes-1];

    echo "Bom dia! Hoje é " . $semana[$diaDaSemana];
    
    if ($day == "Domingo" or $day == "Sábado") {
        echo "";
    } 
    else {
        echo "-feira";
    }
    
    echo ", dia " . $hoje . " do mês de " . $mes . " do ano de " . $ano;


?>