<?php

require_once("conexao.php");

class Cliente extends conexao {
    private $id;
    private $nome;
    private $dataDeNascimento;
    private $salario;

    public function inserir($nome, $dataDeNascimento, $salario){
        $sql = "INSERT INTO cliente(nome, dataDeNascimento, salario) VALUES ('$nome', '$dataDeNascimento', '$salario');";
        $result = $this->conn->query($sql)
        or die("Falha na consulta");
        if($result == true){
            return $result;
        }
    }
    public function consulta(){
        $sql = "SELECT * FROM cliente ;";
        $result = $this->conn->query($sql)
        or die ("Falha na consulta");
        if($result == true){
            return $result;
        }
    }
}