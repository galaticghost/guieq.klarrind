<?php
require_once("conexao.php");

Class Cidade extends conexao{
	public $id;
	public $nome;
	public $tabela = "cidade";

	public function __construct(){
		parent::__construct();
	}
//consulta no banco
	public function consulta(){
		$sql = "SELECT * FROM $this->tabela";
		$result = $this->conn->query($sql)
		or die("Falha na consulta");
		if($result == true){
			return $result;
		}
		else{
			die("Falha na consulta!");
		}
		//$this->conn->close();
		}
	
	public function inserir($nome){
		$sql = "INSERT INTO $this->tabela(nome) VALUES ('$nome');";
		mysqli_query($this->conn, $sql);
	}
}
