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
    
    <a href="admin.php"><button>Voltar</button></a>

    <table border ="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr> 
    
    <?php
    require_once("../controller/cidadeController.php");    
    
    $result = CidadeController::consultar();
    foreach($result as $linha){
        $id = $linha['id'];
            echo"<tr>
                <td>" . $linha['id'] . "</td>
                <td>" . $linha['nome'] . "</td>
                <td><a href ='editarCidade.php?id=$id'><button>editar</button></a></td>
                <td><a href ='../controller/cidadeController.php?action=excluirCidade&id=$id'onclick='return confirm(\"Tem certeza?\")'><button>excluir</button></a></td>
                </tr>";
        }
    ?>
    </table>
        
    <?php
    if(isset($_GET["nomeVazio"])){
        echo "<script> alert('O campo nome não pode ser vazio!'); </script>";
    }

    if(isset($_GET["nome"])){
        $nome = $_GET["nome"];
        echo "<script> alert('Cidade $nome cadastrada com sucesso!'); </script>";
    }

    if (isset($_GET["erro"])){
        echo "<script> alert('Erro! Não foi possivel cadastrar'); </script>";
    }

    if(isset($_GET["editar"])){
        echo "<script> alert('Cidade editada com sucesso!'); </script>";
    }
    
    if(isset($_GET["excluir"])){
        echo "<script> alert('Cidade excluida com sucesso!'); </script>";
    }
    ?>
</body>
</html>