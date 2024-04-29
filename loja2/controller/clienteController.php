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
            $novoCli->conn->close();
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

    public function handlerRequest(){
        if(isset($_GET['action']) and $_GET['action'] == 'inserirCliente'){
            $this->inserirCliente();
        }
    }
}
$controlador = new clienteController();
$controlador->handlerRequest();