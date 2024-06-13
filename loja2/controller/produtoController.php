<?php
require_once("../model/produtoModel.php");

class ProdutoController{
    
    public static function consultar(){
        $novoPro = new Produto();
        return $novoPro->consulta();
    }

    public function consultarId($id){
        $novoPro = new Produto();
        return $novoPro->consultarId($id);
    }
    
    public function inserirProduto(){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $descricao = $_POST['descricao'];
        if (($nome == null) or ($valor == null) or (!$descricao)){
            header("Location: ../view/produtos.php?camposVazios");
        }
        elseif($_SERVER['REQUEST_METHOD'] === 'POST'){
            $novoPro = new Produto();
            $novoPro->inserir($nome, $valor,$descricao);
        }
        else{
            header("Location: ../view/produtos.php?erro");
        }
    }
    
    public function editar(){
        $id = $_GET['id'];
        $dados = $this->consultarId($id);
        $dados = mysqli_fetch_array($dados);
        $nome = $dados['nome'];
        $valor = $dados['valor'];
        $descricao = $dados['descricao'];

        if ($_POST['nome'] != null){
            $nome = $_POST['nome'];
        }
        if ($_POST['valor'] != null){
            $valor = $_POST['valor'];
        }
        if ($_POST['descricao'] != null){
            $descricao = $_POST['descricao'];
        }
        $novoPro = new Produto();
        $novoPro->editar($nome,$valor,$descricao,$id);
    }
    public function excluir(){
        $id = $_GET['id'];
        $novoPro = new Produto();
        $novoPro->excluir($id);
    }

    public function handleRequest(){
        if(isset($_GET['action']) && $_GET['action'] == 'inserirProduto'){
            $this->inserirProduto();
        }
        if(isset($_GET['action']) && $_GET['action'] == 'editarProduto'){
            $this->editar();
        }
        if(isset($_GET['action']) && $_GET['action'] == 'excluirProduto'){
            $this->excluir();
        }
    }
}

$novoPro = new ProdutoController();
$novoPro->handleRequest();