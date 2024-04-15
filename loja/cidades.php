<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>Loja - Cidades</title>
</head>
<body>
    <h1>Cidades</h1>
    <form method="post" action="controller/salvarCidade.php">
        <label>Nome: </label>
        <input type="text" placeholder="Digite o nome da cidade..." name="txtNome">
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

        <tr>
            <td>1</td>
            <td>Itati</td>
            <td><button>Editar</button></td>
            <td><button>Excluir</button></td>
        </tr>

        <tr>
            <td>2</td>
            <td>Tangamandápio</td>
            <td><button>Editar</button></td>
            <td><button>Excluir</button></td>
        </tr>
    </table>
</body>
</html>