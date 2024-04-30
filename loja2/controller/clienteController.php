<?php
require_once("../model/cliente.php");

class clienteController{
    public function inserirCliente(){
        $nome = $_POST["txtNome"];
        $dataDeNascimento = $_POST["txtData"];
        $salario = $_POST["txtSalario"];
        if(($nome == null) or ($dataDeNascimento == null) or ($salario == null)){
            header("Location: ../view/clientes.php?campoVazio");
        }
        elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
            $novoCli = new Cliente();
            $novoCli->inserir($nome,$dataDeNascimento,$salario);
            header("Location: ../view/clientes.php?nome=$nome");
        }
        else{
            header("Location: ../view/clientes.php?erro");
        }
    }

    public function consultar(){
        $novoCli = new Cliente();
        $novoCli = $novoCli->consulta();
        return $novoCli;
    }
    public function editarCliente(){
        $id = $_GET['id'];
        $valor = $_POST['novoValor'];
        $type = $_GET['type'];
        $novoCli = new Cliente();
        $novoCli->editar($type,$valor,$id);
        header("Location: ../view/editarCliente.php?id=$id");
    }
    public function excluirCliente(){
        $id = $_GET['id'];
        $novoCli = new Cliente();
        $novoCli->excluir($id);
        header("Location: ../view/clientes.php?excluido");
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