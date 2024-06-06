<?php
require_once("conexao.php");

class Produto extends Conexao /*implements ProdutoInterface*/{
    private $id;
    private $nome;
    private $valor;
    
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

    public function consulta(){
        $sql = "SELECT id,nome,valor FROM produto";
        $result = $this->conn->query($sql) or
        die("Falha na consulta");
        $this->conn->close();
        if ($result == true){
            return $result;
        }
    }
    
    public function consultarId($id){
        $sql = "SELECT nome,valor FROM produto WHERE id = ?";
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

    public function inserir($nome,$valor){
        $sql = "INSERT INTO produto (nome,valor) VALUES (?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sd',$nome,$valor);
        $stmt->execute();
        $stmt->close();
        if ($stmt){
            header("Location: ../view/produtos.php?nome=$nome");
        }
        else{
            die("Falha na consulta");
        }
    }
    
    public function editar($nome,$valor,$id){
        $sql = "UPDATE produto SET nome = ?, valor = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdi",$nome,$valor,$id);
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