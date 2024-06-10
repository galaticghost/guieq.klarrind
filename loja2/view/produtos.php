<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION == false){
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>

<body>
<?php require_once('admin.php'); ?>
<h1>Cadastrar Produtos</h1>

<form method="POST" action="../controller/produtoController.php?action=inserirProduto" >
    <label>Nome: </label>
        <input type="text" placeholder="Digite o nome do produto" name="nome" required >
    <br>
    <label>Valor: </label>
        <input type="number" placeholder="Digite o valor do produto" name = "valor" step="0.01" requried>
    <br>
    <input type="submit" value="Salvar" />
    <input type="reset" value="Limpar" />
</form>

    <table border ="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor</th>
        </tr>

<?php
require_once("../controller/produtoController.php");
$consulta = ProdutoController::consultar();
foreach($consulta as $produto){
    $id = $produto['id'];
    $nome = $produto['nome'];

    $valor = $produto['valor'];
    $valor = number_format($valor,2, ',', '.');

    echo "<tr>
    <td>" . $id . "</td>
    <td>" . $nome . "</td>
    <td>" . $valor . "</td>
    <td><a href ='editarProduto.php?id=$id'><button>editar</button></a></td>
    <td><a href ='../controller/produtoController.php?action=excluirProduto&id=$id'onclick='return confirm(\"Tem certeza?\")'><button>excluir</button></a></td>
    </tr>";
}

if (isset($_GET['nome'])){
    $nome = $_GET['nome'];
    echo "<script>alert('Produto $nome adicionado com sucesso!');</script>";
}

if (isset($_GET['erro'])){
    echo"<script>alert('Pane no sistema.');</script>";
}

if (isset($_GET['editado'])){
    $nome = $_GET['nome'];
    echo "<script>alert('Produto $nome editado com sucesso!');</script>";
}

if (isset($_GET['excluido'])){
    echo "<script>alert('Produto excluido com sucesso!');</script>";
}
?>

</body>
</html>