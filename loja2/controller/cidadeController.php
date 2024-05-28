<?php

require_once("../model/cidadeModel.php");

class CidadeController{
    public static function consultar(){
        $cidade = new cidade();
        $result = $cidade->consulta();
        return $result;
    }
    
    public function consultarCidades(){
        $novoCid = new cidade();
        $result = $novoCid->consultaCidades();
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
        }
        else{
            header("Location: ../view/cidades.php?erro");
        }
    }
    
    public function editarCidade(){
        $nome = $_POST['novoNome'];
        $id = $_GET['id'];
        $editaCidade = new Cidade();
        $editaCidade->editar($nome, $id);
    }
    public function excluir(){
        $id = $_GET['id'];
        $excluiCidade = new Cidade();
        $excluiCidade->excluir($id);
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