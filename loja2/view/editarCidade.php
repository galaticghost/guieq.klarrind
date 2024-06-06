<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION == false){
    header("Location: ../index.php");
}

require_once('admin.php');

if(isset($_GET['id'])){
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
    <title>Editar cidades</title>
</head>
<body>
    <h1>Editar cidade</h1>
    
    <form method="POST" action ="../controller/cidadeController.php?action=editarCidade&id=<?php echo $id;?>">
        Nome: <input type="text" placeholder="Digite o nome da cidade..." name="novoNome" required />
        <input type="submit" value="Salvar" />
    </form>
    
</body>
</html>