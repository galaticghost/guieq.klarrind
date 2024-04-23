<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Pessoas</title>
</head>
<body>
    <h1>Pessoas</h1>
    <form method="POST" action="controller/salvarCliente.php">
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome da pessoa..." name="txtNome" required>
        <br>
        <input type="text" placeholder="Digite a data de nascimento da pessoa" name="txtData" required>
        <br>
        <input type="text" placeholder="Digite o salário da pessoa..." name="txtSalario" required>
        <br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>

    <hr>
    
    <table border="1">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>        
        </tr>

        <?php
            if (isset($_REQUEST["nome"])){
                $nome = $_REQUEST["nome"];
                echo "<tr>
                <td>1</td>
                <td>$nome</td>
                <td><button>Editar</button></td>
                <td><button>Excluir</button></td>
                </tr>";
            }
        ?>
    </table>

    <?php
        if (isset($_REQUEST["nomeVazio"])){
            echo "<script> alert('O campo nome não pode ser vazio'); </script>";
        }
        
        if (isset($_REQUEST["nome"])){
            $nome = $_REQUEST["nome"];
            echo "<script> alert('Cliente $nome cadastrado(a) com sucesso'); </script>";
        }
    ?>
</body>
</html>