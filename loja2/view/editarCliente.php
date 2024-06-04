<?php
include_once("../controller/clienteController.php");
require_once('admin.php');
if (isset($_GET['id'])){
    $id = $_GET['id'];
}
else{
    die("Sem id");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar cliente</title>
</head>
<body>
    <h1>Editar cliente</h1>
    
    <?php
    $controlador = new clienteController();
    $nome = $controlador->consultarNome($id);
    $nome = mysqli_fetch_row($nome);
    echo "<h2>$nome[0]</h2>";
    ?>

        <form method="POST" action ="../controller/clienteController.php?action=editarCliente&id=<?php echo $id;?>">
            Nome: <input type="text" placeholder="Digite o nome do cliente..." name="nome" /> <br>
            Data de nascimento: <input type="date" name="dataDeNascimento" /> <br>
            Salário: <input type="number" step="0.01" name="salario" /> <br>
            <label>Cidade</label>
            <select name = "codCidade">
                <option value = "0">Selecione...</option>
            <?php
            require_once("../controller/cidadeController.php");
            $cidade = new CidadeController();
            $cidade = $cidade->consultarCidades();
            foreach ($cidade as $cidades){
                echo '<option value ="' . $cidades['id'] . '">'. $cidades['nome'] . '</option>';
            }
            ?>
            </select>
            <br>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
        </form>
        
</body>
</html>