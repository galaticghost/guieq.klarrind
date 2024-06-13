<?php
require_once("conexao.php");

class Produto extends Conexao /*implements ProdutoInterface*/{
    private $id;
    private $nome;
    private $valor;
    private $descricao;
    
    public function __construct(){
        parent::__construct();
    }

    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getValor(){
        return $this->valor;
    } 
    
    public function setValor($valor){
        $this->valor = $valor;
    }
    
    public function getDescricao(){
        return $this->descricao;
    }
    
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function consulta(){
        $sql = "SELECT id,nome,valor,descricao FROM produto";
        $result = $this->conn->query($sql) or
        die("Falha na consulta");
        $this->conn->close();
        if ($result == true){
            return $result;
        }
    }
    
    public function consultarId($id){
        $sql = "SELECT nome,valor,descricao FROM produto WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute() or
        die("Falha na consulta");
        $result = $stmt->get_result();
        $stmt->close();
        if ($result){
            return $result;
        }
        
    }

    public function inserir($nome,$valor,$descricao){
        $sql = "INSERT INTO produto (nome,valor,descricao) VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sds',$nome,$valor,$descricao);
        $stmt->execute();
        $stmt->close();
        if ($stmt){
            header("Location: ../view/produtos.php?nome=$nome");
        }
        else{
            die("Falha na consulta");
        }
    }
    
    public function editar($nome,$valor,$descricao,$id){
        $sql = "UPDATE produto SET nome = ?, valor = ?, descricao = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdsi",$nome,$valor,$descricao,$id);
        $stmt->execute();
        $stmt->close();
        if ($stmt){
            header("Location: ../view/produtos.php?editado&nome=$nome");
        }
        else{
            die("Falha na edição");
        }
    }
    
    public function excluir($id){
        $sql = "DELETE FROM produto WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();
        if($stmt){
            header("Location: ../view/produtos.php?excluido");
        }
        else{
            die("Falha na exclusão.");
        }
    }
}

interface ProdutoInterface{
//    public function inserir();
    public function editar();
    public function excluir();
}