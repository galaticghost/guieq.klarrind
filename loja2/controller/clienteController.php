<?php
require_once("../model/clienteModel.php");

class clienteController{
    public function inserirCliente(){
        $nome = $_POST["txtNome"];
        $dataDeNascimento = $_POST["txtData"];
        $salario = $_POST["txtSalario"];
        $codCidade = $_POST["txtCodCidade"];
        if(($nome == null) or ($dataDeNascimento == null) or ($salario == null) or ($codCidade == null)){
            header("Location: ../view/clientes.php?campoVazio");
        }
        elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
            $novoCli = new Cliente();
        $novoCli->inserir($nome,$dataDeNascimento,$salario,$codCidade);
        }
        else{
            header("Location: ../view/clientes.php?erro");
        }
    }
    
    public static function consultar(){
        $novoCli = new Cliente();
        $result = $novoCli->consulta();
        return $result;
    }
// Só o nome    
    public function consultarNome($id){
        $novoCli = new Cliente();
        $result = $novoCli->consultaNome($id);
        return $result;
    }
//Linha completa
    public function consultarNomeCompleta($id){
        $novoCli = new Cliente();
        $result = $novoCli->consultaNomeCompleta($id);
        return $result;
    }
   
    public function editarCliente(){
        $id = $_GET['id'];
        $dados = $this->consultarNomeCompleta($id);
        $dados = mysqli_fetch_array($dados);
        $nome = $dados['nome'];
        $dataDeNascimento = $dados['dataDeNascimento'];
        $salario = $dados['salario'];
        $codCidade = $dados['codCidade'];
        if ($_POST['nome'] != NULL){
            $nome = $_POST['nome'];
        }
        if ($_POST['dataDeNascimento'] != NULL){
            $dataDeNascimento = $_POST['dataDeNascimento'];
        }
        if ($_POST['salario'] != NULL){
            $salario = $_POST['salario'];
        }
        if ($_POST['codCidade'] != NULL){
            $codCidade = $_POST['codCidade'];
        }
        $novoCli = new Cliente();
        $result = $novoCli->editar($id,$nome,$dataDeNascimento,$salario,$codCidade);
        return $result;
    }
    
    public function excluirCliente(){
        $id = $_GET['id'];
        $novoCli = new Cliente();
        $novoCli->excluir($id);
    }

    public function handleRequest(){
        if(isset($_GET['action']) and $_GET['action'] == 'inserirCliente'){
            $this->inserirCliente();
        }
        if(isset($_GET['action']) and $_GET['action'] == 'excluirCliente'){
            $this->excluirCliente();
        }
        if(isset($_GET['action']) and $_GET['action'] == 'editarCliente'){
            $this->editarCliente();
        }
    }
}
$controlador = new clienteController();
$controlador->handleRequest();