<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION == false){
    header("Location: ../index.php");
}

require_once("admin.php");

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
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

        <form method="POST" action ="../controller/produtoController.php?action=editarProduto&id=<?php echo $id;?>">
            Nome: <input type="text" placeholder="Digite o nome do cliente..." name="nome" /> <br>
            Valor: <input type="number" placeholder="Digite o valor do produto" step="0.01" name="valor"/> <br>
            <input type="submit" value="Salvar" />
            <input type="reset" value="Limpar" />
        </form>
        
</body>
</html>