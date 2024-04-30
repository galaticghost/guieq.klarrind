<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes</h1>
    <form method="POST" action="../controller/clienteController.php?action=inserirCliente" >
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome do cliente..." name="txtNome" />
        <br>
        <label>Data de nascimento: </label>
        <input type="date" name="txtData" />
        <br>
        <label>salário: </label>
        <input type="number" step="0.01" name="txtSalario" />
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <table border ="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Salario</th>
            <th>Cidade</th>
        </tr> 
    <?php
    require_once("../controller/clienteController.php");
    $controlador = new clienteController();
    $result = $controlador->consultar(); 
    foreach($result as $linha){
        $id = $linha['id'];
            echo"<tr>
                <td>" . $linha['id'] . "</td>
                <td>" . $linha['nome'] . "</td>
                <td>" . $linha['dataDeNascimento'] . "</td>
                <td>" . $linha['salario'] . "</td>
                <td>" . $linha['codCidade'] . "</td>
                <td><a href ='editarCliente.php?id=$id'><button>editar</button></a></td>
                <td><a href ='../controller/clienteController.php?action=excluirCliente&id=$id'onclick='return confirm(\"Tem certeza?\")'><button>excluir</button></a></td>
                </tr>";
        }
    ?>
    <?php
    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
        echo "<script>alert('O cliente $nome foi registrado com sucesso!');</script>";
    }
    if(isset($_GET['nomeVazio'])){
        echo "<script>alert('Um dos campos está vazio');</script>";
    }
    if(isset($_GET['erro'])){
        echo "<script>alert('Deu pau no sistema');</script>";
    }
    
    ?>
</body>
</html>