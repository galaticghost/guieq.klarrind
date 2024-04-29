<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Cidades</title>
</head>
<body>
    <h1>Cidades</h1>

    <form method="POST" action="../controller/cidadeController.php?action=inserirCidade" >
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome da cidade..." name="txtNome" />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <?php
    require_once("../controller/cidadeController.php");    
    $controller = new CidadeController();
    $result = $controller->consultar();
    ?>
    <table border ="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr> 
    <?php
    foreach($result as $linha){
        $id = $linha['id'];
            echo"<tr>
                <td>" . $linha['id'] . "</td>
                <td>" . $linha['nome'] . "</td>
                <td><button><a href ='editarCidade.php?id=$id'>editar</a></button></td>
                <td><button><a href ='../controller/cidadeController.php?action=excluirCidade&id=$id'onclick='return confirm(\"Tem certeza?\")'>excluir</a><button</td>
                </tr>";
        }
    ?>
            </table>
        <?php
        if(isset($_REQUEST["nomeVazio"])){
            echo "<script> alert('O campo nome não pode ser vazio!'); </script>";
        }

        if(isset($_REQUEST["nome"])){
            $nome = $_REQUEST["nome"];
            echo "<script> alert('Cidade $nome cadastrada com sucesso!'); </script>";
        }

        if (isset($_REQUEST["erro"])){
            echo "<script> alert('Erro! Não foi possivel cadastrar'); </script>";
        }

        if(isset($_REQUEST["editar"])){
            echo "<script> alert('Cidade editada com sucesso!'); </script>";
        }
        if(isset($_REQUEST["excluir"])){
            echo "<script> alert('Cidade excluida com sucesso!'); </script>";
        }
    ?>
</body>
</html>