<?php

require_once("conexao.php");

class Cliente extends conexao {
    private $id;
    private $nome;
    private $dataDeNascimento;
    private $salario;

    public function inserir($nome, $dataDeNascimento, $salario){
        $sql = "INSERT INTO cliente(nome, dataDeNascimento, salario) VALUES ('$nome', '$dataDeNascimento', '$salario');";
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
    public function excluir($id){
        $sql = "DELETE FROM cliente WHERE id = $id";
        $this->conn->query($sql)
        or die("Falha na consulta");
        $this->conn->close();
    }
}