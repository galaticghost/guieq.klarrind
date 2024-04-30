<?php
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
        <form method="POST" action ="../controller/clienteController.php?action=editarCliente&id=<?php echo $id;?>&type=nome">
            Nome: <input type="text" placeholder="Digite o nome do cliente..." name="novoValor" />
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
        </form>
        <form method="POST" action ="../controller/clienteController.php?action=editarCliente&id=<?php echo $id;?>&type=dataDeNascimento">
            Data de nascimento: <input type="date" name="novoValor" />
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
        </form>
        <form method="POST" action ="../controller/clienteController.php?action=editarCliente&id=<?php echo $id;?>&type=salario">
            Salário: <input type="number" step="0.01" name="novoValor" />
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
        </form>
        <a href="clientes.php"><button>Voltar</button></a>
</body>
</html>