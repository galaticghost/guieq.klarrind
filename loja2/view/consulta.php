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
                        <td><a href ='editarCidade.php?id=$id'>editar</a></td>
                        <td><a href ='../controller/cidadeController.php?action=excluirCidade&id=$id'onclick='return confirm(\"Tem certeza?\")'>excluir</a></td>
                    </tr>";
            }
        ?>
    </table>
