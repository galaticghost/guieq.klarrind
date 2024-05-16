<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Big Bola</h1>
    <?php
    $_SESSION["Bola"] = "Quem é bola?";
    $_SESSION["bolaue"] = "Bola ué";
    echo "Variáveis setadas com sucesso";
    ?> 
    <a href ="sessions.php"><button>Go to small ball</button></a>
</body>
</html>