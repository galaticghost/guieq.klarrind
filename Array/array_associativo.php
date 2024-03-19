<?php
// Array associativo
    $produtos = array(
        "EL1241" => "Celular samsung M23",
        "COZ032" => "Coocktop de indução - 110v",
        "M94238" => "Sofá três lugares cinza",
        "PAN294" => "Jogo de panela tramontina" 
    );

    echo $produtos['PAN294'];

    echo "<hr><br><br> Data completa com array associativo<br>";

    $semana = array(
        "Sun" => "domingo",
        "Mon" => "segunda",
        "Tue" => "terça",
        "Wed" => "quarta",
        "Thu" => "quinta",
        "Fri" => "sexta",
        "Sat" => "sábado"
    );
    $mes = array(
        "1" => "janeiro",
        "2" => "fevereiro",
        "3" => "março",
        "4" => "abril",
        "5" => "maio",
        "6" => "junho",
        "7" => "julho",
        "8" => "agosto",
        "9" => "setembro",
        "10" => "outubro",
        "11" => "novembro",
        "12" => "dezembro"
    );
    
    $s = date("D");
    $m = date("n");
    echo $semana[$s] . "<br>O mês de hoje é  " . $mes[$m] ;
?>
<br>