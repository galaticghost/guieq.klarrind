<?php

require_once("../model/cidade.php");

class CidadeController{
    public function consultar(){
        $cidade = new cidade();
        $result = $cidade->consulta();
        return $result;
    }
    public function inserir(){
        $nome = $_POST['txtNome'];
        if(strlen( $nome ) == 0){
            header("Location: ../view/cidades.php?nomeVazio");
        }
        elseif($_SERVER['REQUEST_METHOD'] === 'POST') {
            $novaCid = new Cidade();
            $novaCid->inserir($nome);
            header("Location: ../view/cidades.php?nome=$nome");
        }
        else{
            header("Location: ../view/cidades.php?nome=erro");
        }
    }
    
    public function editarCidade(){
        $nome = $_POST['novoNome'];
        $id = $_GET['id'];
        $editaCidade = new Cidade();
        $editaCidade->editar($nome, $id);
        header("Location: ../view/cidades.php?editar");
    }
    public function excluir(){
        $id = $_GET['id'];
        $excluiCidade = new Cidade();
        $excluiCidade->excluir($id);
        header("Location: ../view/cidades.php?excluir");
    }
    
    public function handleRequest(){
        if (isset($_GET['action']) and $_GET['action'] == 'inserirCidade'){
            $this->inserir();
        }
        elseif(isset($_GET['action']) and $_GET['action'] =='excluirCidade'){
            $this->excluir();
        }
        elseif(isset($_GET['action']) and $_GET['action'] =='editarCidade'){
            $this->editarCidade();
        }
    }
}
$cidadeController = new CidadeController();
$cidadeController->handleRequest();