<?php

include_once("clsCidade.php");
class Pessoa {
    public $id; //int
    public $nome; //str
    public $dataDeNascimento; //date
    public $salario; //double
    public $cidade; //cidade
    
    public function __construct($id = null, $nome = null, $dataDeNascimento = null,$salario = 1412.00, $cidade = new Cidade(0, "Outra")){
        $this->id = $id;
        $this->nome = $nome;
        $this->dataDeNascimento = $dataDeNascimento;
        $this->salario = $salario;
        $this->cidade = $cidade;
    }
}