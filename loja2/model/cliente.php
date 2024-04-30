<?php

require_once("conexao.php");

class Cliente extends conexao {
    private $id;
    private $nome;
    private $dataDeNascimento;
    private $salario;
    private $codCidade;

    public function inserir($nome, $dataDeNascimento, $salario, $codCidade){
        $sql = "INSERT INTO cliente(nome, dataDeNascimento, salario ,codCidade) VALUES 
        ('$nome', '$dataDeNascimento', '$salario', '$codCidade');";
        $this->conn->query($sql)
        or die("Falha na consulta");
        $this->conn->close();
    }
    public function consulta(){
        $sql = "SELECT * FROM cliente ;";
        $result = $this->conn->query($sql)
        or die ("Falha na consulta");
        $this->conn->close();
        if($result == true){
            return $result;
        }
    }
    public function editar($tipo,$valor,$id){
        $sql = "UPDATE cliente SET $tipo = '$valor' WHERE id = $id";
        $this->conn->query($sql)
        or die("Falha na edição");
        $this->conn->close();
    }
    public function excluir($id){
        $sql = "DELETE FROM cliente WHERE id = $id";
        $this->conn->query($sql)
        or die("Falha na consulta");
        $this->conn->close();
    }
}