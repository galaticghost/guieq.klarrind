<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION == false){
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
<?php require_once('admin.php'); ?>
    <h1>Cadastrar Clientes</h1>
    
    <form method="POST" action="../controller/clienteController.php?action=inserirCliente" >
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome do cliente..." name="txtNome" required />
        <br>
        <label>Data de nascimento: </label>
        <input type="date" name="txtData" required />
        <br>
        <label>Salário: </label>
        <input type="number" step="0.01" name="txtSalario" required />
        <br>
        <label>Cidade:</label>
        <select name="txtCodCidade">
            <option value = "0">Selecione...</option>
        <?php
        require_once("../controller/cidadeController.php");
        $cidade = new cidadeController();
        $cidade = $cidade->consultarCidades();
        foreach($cidade as $cidades){
            echo '<option value="'. $cidades['id'] .'">'. $cidades['nome'] .'</option>';
        }
        ?>
        </select>
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
    
    $result = clienteController::consultar(); 
    
    foreach($result as $linha){
        $id = $linha['id'];
        
        $nome = $linha['nome'];
        
        $dataDeNascimento = $linha['dataDeNascimento'];
        $dataDeNascimento = date('d/m/Y', strtotime($dataDeNascimento));
        
        $salario = $linha['salario'];
        $salario = number_format($salario,2, ',', '.');

        $cidadeNome = $linha['nomeCidade'];
        
        echo"<tr>
                <td>" . $id . "</td>
                <td>" . $nome . "</td>
                <td>" . $dataDeNascimento . "</td>
                <td> R$" . $salario . "</td>
                <td>" . $cidadeNome . "</td>
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
        echo "<script>alert('Há campos vazios');</script>";
    }
    
    if(isset($_GET['erro'])){
        echo "<script>alert('Deu pau no sistema');</script>";
    }
    
    if(isset($_GET['excluido'])){
        echo "<script>alert('Cliente excluído com sucesso!');</script>";
    }

    if(isset($_GET['editado'])){
        echo "<script>alert('Cliente editado com sucesso!');</script>";
    }
    ?>
</body>
</html>