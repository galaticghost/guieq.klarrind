<?php
require_once("model/cidade.php");

$cidade = new Cidade();

$consulta = $cidade->consulta();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
</head>
<body>
    <table border ="1">
        <?php
            foreach($consulta as $linha){
                echo"<tr>
                        <td>" . $linha['id'] . "</td>
                        <td>" . $linha['nome'] . "</td>
                    </tr>";
            }
        ?>
    </table>
</body>
</html>
