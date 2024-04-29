<?php
require_once("conexao.php");

Class Cidade extends conexao{
	private $id;
	private $nome;
	private $tabela = "cidade";

	public function __construct(){
		parent::__construct();
	}
//consulta no banco
	public function consulta(){
		$sql = "SELECT id,nome FROM $this->tabela";
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
		//mysqli_query($this->conn, $sql);
		$result = $this->conn->query($sql)
		or die("Falha na consulta");
		if($result == true){
				return $result;
		}
		else{
			die("Falha na consulta!");
		}
	}
	public function editar($nome, $id){
		$sql = "UPDATE cidade SET nome = ('$nome') WHERE id = $id;";
		$this->conn->query($sql);
		$this->conn->close();
	}
	public function excluir($id){
		$sql = "DELETE FROM $this->tabela WHERE id = $id";
		$this->conn->query($sql);
		$this->conn->close();
	}
}
/*public function inserir($nome){
	$sql = "INSERT INTO $this->tabela(nome) VALUES(?)";
	$stmt = $this->conn->prepare($sql);
	$stmt->bind_param('s',$nome);
	$stmt->execute();
	
	if($stmt == true){
		header( "Location: ../cidades.php?nome=$nome");
	}else{
		die("Falha no cadastro!");
	}
	$stmt->close();
	$this->conn->close();
}*/